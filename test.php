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
	<meta charset="utf-8">
	<!--For responsive		-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		
	<link rel="icon" href="images/logo.png">	
	<title>RELIEF</title>

	<!--Owl Carousel	-->	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"  />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"  />
		
		
	<!--Bootstra CSS	-->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

	<!--Custom Style CSS	-->
	<link rel="stylesheet" href="css/style.css" type="text/css">	
</head>

<body>
    <form method="post" action="test.php">
        <div class="container content">
            <p class="content input-box">
                <label>First Name</label>
                <input type="text" name="PFirst_name" style="margin-bottom: 15px; width: calc(100% / 2 - 20px); height: 45px; outline: none; font-size: 16px; border-radius: 5px; padding-left: 15px; border: 1px solid #ccc; border-bottom-width: 2px;">
            </p>

            <p class="content input-box">
                <label>Last Name</label>
                <input type="text" name="PLast_name" style="margin-bottom: 15px; width: calc(100% / 2 - 20px); height: 45px; outline: none; font-size: 16px; border-radius: 5px; padding-left: 15px; border: 1px solid #ccc; border-bottom-width: 2px;">
            </p>

            <p class="content input-box">
                <label>Username Name</label>
                <input type="text" name="PUsername" style="margin-bottom: 15px; width: calc(100% / 2 - 20px); height: 45px; outline: none; font-size: 16px; border-radius: 5px; padding-left: 15px; border: 1px solid #ccc; border-bottom-width: 2px;">
            </p>

            <p class="content input-box">
                <label>Year of Birth</label>
                <input type="text" name="PDOB" style="margin-bottom: 15px; width: calc(100% / 2 - 20px); height: 45px; outline: none; font-size: 16px; border-radius: 5px; padding-left: 15px; border: 1px solid #ccc; border-bottom-width: 2px;">
            </p>

            <p class="content input-box">
                <label>Email</label>
                <input type="Email" name="PEmail" style="margin-bottom: 15px; width: calc(100% / 2 - 20px); height: 45px; outline: none; font-size: 16px; border-radius: 5px; padding-left: 15px; border: 1px solid #ccc; border-bottom-width: 2px;">
            </p>

            <p class="content input-box">
                <label>Phone number</label>
                <input type="text" name="PPhone_number" style="margin-bottom: 15px; width: calc(100% / 2 - 20px); height: 45px; outline: none; font-size: 16px; border-radius: 5px; padding-left: 15px; border: 1px solid #ccc; border-bottom-width: 2px;">
            </p>

            <p class="content input-box">
                <label>Address</label>
                <input type="text" name="PAddress" style="margin-bottom: 15px; width: calc(100% / 2 - 20px); height: 45px; outline: none; font-size: 16px; border-radius: 5px; padding-left: 15px; border: 1px solid #ccc; border-bottom-width: 2px;">
            </p>

            <p class="content input-box">
                <label>Password</label>
                <input type="password" name="PPassword" style="margin-bottom: 15px; width: calc(100% / 2 - 20px); height: 45px; outline: none; font-size: 16px; border-radius: 5px; padding-left: 15px; border: 1px solid #ccc; border-bottom-width: 2px;">
            </p>

            <p class="content input-box">
                <label>Re Password</label>
                <input type="password" name="PRe_Password" style="margin-bottom: 15px; width: calc(100% / 2 - 20px); height: 45px; outline: none; font-size: 16px; border-radius: 5px; padding-left: 15px; border: 1px solid #ccc; border-bottom-width: 2px;">
            </p>

            <p class="content input-box">
                <span for="PGender" name='PGender'>Gender</span><br>
                <select  name="PGender" id="PGender" style="margin-bottom: 15px; width: calc(100% / 2 - 20px); height: 45px; outline: none; font-size: 16px; border-radius: 5px; padding-left: 15px; border: 1px solid #ccc; border-bottom-width: 2px;">
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Others</option>
                </select>
            </p>
            
    
            <p class="content input-box">
                <span class="details" style="font-weight: 500;">Diseases that Mainly applies to you:</span><br>
                <input type="checkbox" name='PDiseases' id='D' value="D">
                <label for="D">Diabates</label><br>
                <input type="checkbox" name='PDiseases' id='BP' value="BP">
                <label for="BP">Blood Pressure</label><br>
                <input type="checkbox" name='PDiseases' id='HR' value="HR">
                <label for="HR">Heart Rate Issues</label><br>
                <input type="checkbox" name='PDiseases' id='OS' value="OS">
                <label for="OS">Oxygen Saturation Issues</label>
            </p>

            <p>
                <input type="submit" value="register" style="margin-bottom: 15px; width: calc(100% / 2 - 20px); height: 45px; outline: none; font-size: 16px; border-radius: 5px; padding-left: 15px; border: 1px solid #ccc; border-bottom-width: 2px;">
            </p>
        </div>


    </form>
</body>