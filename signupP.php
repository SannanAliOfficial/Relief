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
      $Plast_name = $_POST['PLast_name'];
      $PUsername = $_POST['PUsername'];
      $PDOB = $_POST['PDOB'];
      $PEmail = $_POST['PEmail'];
      $PPhone_number = $_POST['PPhone_number'];
      $PAddress = $_POST['PAddress'];
      $PPassword = $_POST['PPassword'];
      $PRe_Password = $_POST['PRe_Password'];
      $PGender = $_POST['PGender'];
      $PDiseases = $_POST['PDiseases'];


      if(!empty($PUsername) && !empty($PPassword) && !empty($PRe_Password))
      {
          
          $query = "INSERT INTO Pateints (PFirst_name, PLast_name, PUsername, PDOB , PEmail, PPhone_number, PAddress, PPassword, PRe_Password, PGender, PDiseases) VALUES ('$PFirst_name','$PLast_name', '$PUsername', '$PDOB' ,'$PEmail', '$PPhone_number', '$PAddress' ,'$PPassword', '$PRe_Password' , '$PGender', '$PDiseases')";
          mysqli_query($rdatabase,$query);

          header("Location: PPortal.html");
          die;      
          
      }else
      {
        echo('Please fill all fields');
        die;  
      }
  }





?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="images/logo.png">
    <title>SignUp Form | RELIEF </title>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form  </title>--->
    <link rel="stylesheet" href="styles.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">REGISTERATION</div>
    <div class="content">
      <form method="POST" action="signupP.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details" name='PFirst_name' >First Name</span>
            <input type="text" placeholder="Enter your First name" required>
          </div>
          <div class="input-box">
            <span class="details" name='PLast_name'>Last Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details" name='PUsername'>Username</span>
            <input type="text" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details" name='PDOB'>Date of Birth</span>
            <input type="text" placeholder="DD-MM-YYYY" required>
          </div>
          <div class="input-box">
            <span class="details" name='PEmail'>Email</span>
            <input type="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details" name='PPhone_number'>Phone Number</span>
            <input type="text" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details" name='PAddress'>Address</span>
            <input type="text" placeholder="Enter Your Adress" required>
          </div>
          
          <div class="input-box">
            <span class="details" name='PPassword'>Password</span>
            <input type="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details" name='PRe_Password'>Confirm Password</span>
            <input type="password" placeholder="Confirm your password" required>
          </div>
        </div>
        
        <div class="input-box">
          <span for="PGender" name='PGender'>Gender</span><br>
          <select style="margin-bottom: 15px;
          width: calc(100% / 2 - 20px); height: 45px;
          outline: none;
          font-size: 16px;
          border-radius: 5px;
          padding-left: 15px;
          border: 1px solid #ccc;
          border-bottom-width: 2px;" name="PGender" id="PGender" class="details">
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="O">Others</option>
          </select>
        </div>
        

        <div>
          <span class="details" style="font-weight: 500;">Diseases that Mainly applies to you:</span><br>
          <input type="checkbox" name='PDiseases' id='D' value="D">
          <label for="D">Diabates</label><br>
          <input type="checkbox" name='PDiseases' id='BP' value="BP">
          <label for="BP">Blood Pressure</label><br>
          <input type="checkbox" name='PDiseases' id='HR' value="HR">
          <label for="HR">Heart Rate Issues</label><br>
          <input type="checkbox" name='PDiseases' id='OS' value="OS">
          <label for="OS">Oxygen Saturation Issues</label>
        </div>

        <div class="button">
          <input type="submit" value="REGISTERED"><br><br>
          <p class="text">Already have an account?    <a href="LoginP.php">SIGN IN</a></p>
        </div>
        
      </form>
    </div>
  </div>

</body>
</html>
