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
      $DLast_name = $_POST['DLast_name'];
      $DUsername = $_POST['DUsername'];
      $DEmail = $_POST['DEmail'];
      $DPhone_number = $_POST['DPhone_number'];
      $DPassword = $_POST['DPassword'];
      $DRe_Password = $_POST['DRe_Password'];
      $DSpeciality = $_POST['DSpeciality'];


      if(isset($_POST['DFirst_name']) && isset($_POST['DLast_name']) && isset($_POST['DUsername']) && isset($_POST['DEmail']) && isset($_POST['DPhone_number']) && isset($_POST['DPassword']) && isset($_POST['DRe_Password']) && isset($_POST['DSpeciality']))
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
    <form method="post" action="signupD.php" style=" position: fixed;">
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
              border-bottom-width: 2px;" type="text" name="DFirst_name" required>
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
              border-bottom-width: 2px;" type="text" name="DLast_name" required>
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
            border-bottom-width: 2px;" type="text" name="DUsername" required>
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
            border-bottom-width: 2px;" type="Email" name="DEmail" required>
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
            border-bottom-width: 2px;" type="text" name="DPhone_number" required>
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
            border-bottom-width: 2px;" type="password" name="DPassword" required>
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
            border-bottom-width: 2px;" type="password" name="DRe_Password" required>
          </p>

          <p class="input-box">
            <span for="DSpeciality" name='DSpeciality' class="details">Speciality</span>
            <select style="margin-bottom: 10px;
            width: calc(100% / 2 - 20px); height: 30px;
            outline: none;
            font-size: 14px;
            border-radius: 5px;
            padding-left: 10px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;" name="DSpeciality" id="DSpeciality" required>
            <option value="C">Cardiologist</option>
            <option value="E">Endocrinologist</option>
            <option value="P">Pulmonologist</option>
            <option value="GP">General Physician</option>
            <option value="O">Other</option>
            </select>
          </p>

          <div class="button">
            <input type="submit" value="REGISTER" >
            <p class="text">Already have an account?    <a href="LoginD.php">SIGN IN</a></p>
          </div>
        </div>


    </form>

  </body>
</html>
