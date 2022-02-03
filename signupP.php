<?php

  $ruser = 'oGI7KynQVD';
  $rpass = 'GAeI6ZJ9EC';
  $rdb = 'oGI7KynQVD';
    
  if(! $rdatabase = new mysqli('remotemysql.com', $ruser , $rpass, $rdb ))
  {
    echo('No stable database connection');
  }

  if($_POST['PPassword'] != $_POST['PRe_Password']){
    die('Password does not match');
  }

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
      $PFirst_name = $_POST['PFirst_name'];
      $PLast_name = $_POST['PLast_name'];
      $PUsername = $_POST['PUsername'];
      $PDOB = $_POST['PDOB'];
      $PEmail = $_POST['PEmail'];
      $PPhone_number = $_POST['PPhone_number'];
      $PAddress = $_POST['PAddress'];
      $PPassword = $_POST['PPassword'];
      $PRe_Password = $_POST['PRe_Password'];
      $PGender = $_POST['PGender'];
      $PDiseases = $_POST['PDiseases'];


      if(isset($_POST['PFirst_name']) && isset($_POST['PLast_name']) && isset($_POST['PUsername']) && isset($_POST['PDOB']) && isset($_POST['PEmail']) && isset($_POST['PPhone_number']) && isset($_POST['PAddress']) && isset($_POST['PPassword']) && isset($_POST['PRe_Password']) && isset($_POST['PGender']) && isset($_POST['PDiseases']))
      {
        $query = "INSERT INTO Pateints (PFirst_name, PLast_name, PUsername, PDOB , PEmail, PPhone_number, PAddress, PPassword, PRe_Password, PGender, PDiseases) VALUES ('$PFirst_name','$PLast_name', '$PUsername', '$PDOB' ,'$PEmail', '$PPhone_number', '$PAddress' ,'$PPassword', '$PRe_Password' , '$PGender', '$PDiseases')";
        mysqli_query($rdatabase,$query);

        header("Location: PPortal.html");
        die;
      }

      else{
        echo ("variables are being fed empty");
      }
          

      #if(empty($PPassword) && empty($PRe_Password))
      #{
      #  echo('Please fill all fields');
      #  die; 
          
      #}else
      #{
      #  $query = "INSERT INTO Pateints (PFirst_name, PLast_name, PUsername, PDOB , PEmail, PPhone_number, PAddress, PPassword, PRe_Password, PGender, PDiseases) VALUES ('$PFirst_name','$PLast_name', '$PUsername', '$PDOB' ,'$PEmail', '$PPhone_number', '$PAddress' ,'$PPassword', '$PRe_Password' , '$PGender', '$PDiseases')";
      #  mysqli_query($rdatabase,$query);

       # header("Location: PPortal.html");
        #die;  
         
      #}
  }





?>

<!doctype html>
<html>
<head>
	<link rel="icon" href="images/logo.png">
    <title>SignUp Form | RELIEF </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
</head>

<body>
    <form method="post" action="test.php" style=" position: fixed;">
        <div class="container">
            <p class="title">SIGNUP FORM</p><br>
            <div>
                <p class="input-box">
                    <label class="details" >First Name:    </label>
                    <input style="margin-bottom: 10px;
                    width: calc(100% / 2 - 20px); height: 30px;
                    outline: none;
                    font-size: 14px;
                    border-radius: 5px;
                    padding-left: 10px;
                    border: 1px solid #ccc;
                    border-bottom-width: 2px;" type="text" name="PFirst_name" >
                </p>

                <p class="input-box">
                    <label class="details">Last Name:     </label>
                    <input style="margin-bottom: 10px;
                    width: calc(100% / 2 - 20px); height: 30px;
                    outline: none;
                    font-size: 14px;
                    border-radius: 5px;
                    padding-left: 10px;
                    border: 1px solid #ccc;
                    border-bottom-width: 2px;" type="text" name="PLast_name" >
                </p>
            </div>

            <p class="input-box">
                <label class="details">Username Name: </label>
                <input style="margin-bottom: 10px;
                width: calc(100% / 2 - 20px); height: 30px;
                outline: none;
                font-size: 14px;
                border-radius: 5px;
                padding-left: 10px;
                border: 1px solid #ccc;
                border-bottom-width: 2px;" type="text" name="PUsername" >
            </p>

            <p class="input-box">
                <label class="details">Year of Birth: </label>
                <input style="margin-bottom: 10px;
                width: calc(100% / 2 - 20px); height: 30px;
                outline: none;
                font-size: 14px;
                border-radius: 5px;
                padding-left: 10px;
                border: 1px solid #ccc;
                border-bottom-width: 2px;" type="text" name="PDOB" >
            </p>

            <p class="input-box">
                <label class="details">Email:          </label>
                <input style="margin-bottom: 10px;
                width: calc(100% / 2 - 20px); height: 30px;
                outline: none;
                font-size: 14px;
                border-radius: 5px;
                padding-left: 10px;
                border: 1px solid #ccc;
                border-bottom-width: 2px;" type="Email" name="PEmail" >
            </p>

            <p class="input-box">
                <label class="details">Phone number:  </label>
                <input style="margin-bottom: 10px;
                width: calc(100% / 2 - 20px); height: 30px;
                outline: none;
                font-size: 14px;
                border-radius: 5px;
                padding-left: 10px;
                border: 1px solid #ccc;
                border-bottom-width: 2px;" type="text" name="PPhone_number" >
            </p>

            <p class="input-box">
                <label class="details">Address:       </label>
                <input style="margin-bottom: 10px;
                width: calc(100% / 2 - 20px); height: 30px;
                outline: none;
                font-size: 14px;
                border-radius: 5px;
                padding-left: 10px;
                border: 1px solid #ccc;
                border-bottom-width: 2px;" type="text" name="PAddress" >
            </p>

            <p class="input-box">
                <label class="details">Password:      </label>
                <input style="margin-bottom: 10px;
                width: calc(100% / 2 - 20px); height: 30px;
                outline: none;
                font-size: 14px;
                border-radius: 5px;
                padding-left: 10px;
                border: 1px solid #ccc;
                border-bottom-width: 2px;" type="password" name="PPassword" >
            </p>

            <p class="input-box">
                <label class="details">Re Password:   </label>
                <input style="margin-bottom: 10px;
                width: calc(100% / 2 - 20px); height: 30px;
                outline: none;
                font-size: 14px;
                border-radius: 5px;
                padding-left: 10px;
                border: 1px solid #ccc;
                border-bottom-width: 2px;" type="password" name="PRe_Password" >
            </p>

            <p class="input-box">
                <span for="PGender" name='PGender' class="details">Gender</span>
                <select style="margin-bottom: 10px;
                width: calc(100% / 2 - 20px); height: 30px;
                outline: none;
                font-size: 14px;
                border-radius: 5px;
                padding-left: 10px;
                border: 1px solid #ccc;
                border-bottom-width: 2px;" name="PGender" id="PGender" >
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Others</option>
                </select>
            </p>
            
    
            <p class="input-box">
                <span class="details" >Diseases that Mainly applies to you:</span>
                <input type="checkbox" name='PDiseases' id='D' value="D">
                <label for="D">Diabates</label><br>
                <input type="checkbox" name='PDiseases' id='BP' value="BP">
                <label for="BP">Blood Pressure</label><br>
                <input type="checkbox" name='PDiseases' id='HR' value="HR">
                <label for="HR">Heart Rate Issues</label><br>
                <input type="checkbox" name='PDiseases' id='OS' value="OS">
                <label for="OS">Oxygen Saturation Issues</label>
            </p>

            <div class="button">
                <input type="submit" value="REGISTER" >
                <p class="text">Already have an account?    <a href="LoginP.php">SIGN IN</a></p>
            </div>
        </div>


    </form>
</body>