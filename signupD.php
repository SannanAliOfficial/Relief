<?php

  $ruser = 'oGI7KynQVD';
  $rpass = 'GAeI6ZJ9EC';
  $rdb = 'oGI7KynQVD';
    
  if(! $rdatabase = new mysqli('remotemysql.com', $ruser , $rpass, $rdb ))
  {
    echo('No stable database connection');
  }

  if($_POST['DPassword'] != $_POST['DRe_Password']){
    die('Password does not match');
  }

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
      $DFirst_name = $_POST['DFirst_name'];
      $Dlast_name = $_POST['DLast_name'];
      $DUsername = $_POST['DUsername'];
      $DEmail = $_POST['DEmail'];
      $DPhone_number = $_POST['DPhone_number'];
      $DPassword = $_POST['DPassword'];
      $DRe_Password = $_POST['DRe_Password'];
      $DSpeciality = $_POST['DSpeciality'];


      if(!empty($DFirst_name) && !empty($DEmail) && !empty($DPassword) && !empty($DRe_Password) && !empty(DPLast_name) && !empty($DPhone_number))
      {
          
          $query = "INSERT INTO Doctors (DFirst_name, DLast_name, DUsername , DEmail, DPhone_number, DPassword, DRe_Password, DSpeciality) VALUES ('$DFirst_name','$DLast_name', '$DUsername','$DEmail', '$DPhone_number','$DPassword', '$DRe_Password' , '$DSpeciality')";
          mysqli_query($rdatabase,$query);

          header("Location: DPortal.html");
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
      <form action="#" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Fisrt Name</span>
            <input type="text" placeholder="Enter your First name" name="DFirst_name"  required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your Last name" name="DLast_name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="DUsername" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="DEmail" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="DPhone_number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="DPassword" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" name="DRe_Password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="DSpeciality" id="dot-1">
          <input type="radio" name="DSpeciality" id="dot-2">
          <input type="radio" name="DSpeciality" id="dot-3">
          <input type="radio" name="DSpeciality" id="dot-4">
          <span class="gender-title">Please Select your Speciality</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">CardioVascular</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Pulmonologist</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Endocrinologist</span>
            </label>
            <label for="dot-4">
              <span class="dot four"></span>
              <span class="gender">General Physician</span>
              </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="REGISTERED"><br><br>
          <p class="text">Already have an account?<a href="LoginD.php">SIGN IN</a></p>
        </div>
        
      </form>
    </div>
  </div>

</body>
</html>
