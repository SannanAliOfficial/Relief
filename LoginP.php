<?php

    $ruser = 'oGI7KynQVD';
    $rpass = 'GAeI6ZJ9EC';
    $rdb = 'oGI7KynQVD';
    
    if(! $rdatabase = new mysqli('remotemysql.com', $ruser , $rpass, $rdb ))
    {
        echo('No stable database connection');
    }

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$PUsername = $_POST['PUsername'];
		$PPassword = $_POST['PPassword'];

		if(isset($_POST['PUsername']) && isset($_POST['PPassword']))
		{

			//read from database
			$query = "SELECT * FROM Pateints WHERE PUsername = '$PUsername' LIMIT 1";
			$result = mysqli_query($rdatabase, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
                    $user_data = mysqli_fetch_assoc($result);
					
					
				}
                header("Location: PPortal.html");
				die;
			}
			
			echo "Invalid Username or Password!";
		}else
		{
			echo "Invalid form of Username or Password!";
		}
	}
?>



<!DOCTYPE html>
<html lang="en">
 
<head>
    <link rel="icon" href="images/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Up Form | RELIEF</title>
    <!-- CSS file -->
    <!--<link rel="stylesheet" href="./style.css">-->
    <!-- Font Awesome 5 CDN link to add social icons in html5 registration form -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
 
</head>
<style>
    body{
    margin: 0px;
    padding: 0px;
    font-family: sans-serif;
    box-sizing: border-box;
    background-image: url(./images/blog3.jpg);
    background-size:cover;
    background-attachment:fixed;
    
    
}
.container{
    display:flex;
    align-content: center;
    justify-content: center;
    padding-top: 110px;
}

.formWraper{
    display: flex;
    width: 55%;
    height: 500px;
    background-color: rgb(70, 144, 148);
    margin-top: 80px;
    border-radius: 10px;
    box-shadow:0px 0px 20px black;
}
 
/* code for left sectin of form */
.formDiv{
    width: 50%;
    padding: 8%;
    background-color: lavender;
    text-align: center;
    border-radius: 10px 0px 0px 10px;
}
.formDiv h2 {
    color: rgb(6, 54, 6);
    margin-top: -5px;
}
 
/* code for right sectin of the registration form */
.welcomeDiv{
    width: 50%;
    padding: 10px;
    
    background-size: cover;
    text-align: center;
    color: white;
}  
.welcomeDiv h2 {
    margin-top: 180px;
    color: rgb(0, 61, 71);
}
 
 
 /* ---- code for Font Awsome social icons */
.socialBtn{
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}
.icon{
    width: 30px;
    height: 30px;
    border-radius: 15px;
    background-color:lavender;
    margin: 5px;
    line-height: 30px;
    box-shadow: 0px 0px 10px black;
     
}
 
 
 
.text{
    font-size:small;
    color: rgb(1, 32, 37);
    
}
.orDiv {
    width: 10%;
    margin: 0 auto;
    background-color: lavender;
    position: relative;
    top: -16px;
    justify-content: center;
}
 
/* code for form input fields */
.formGroup{
    width: 100%;
    position: relative;
}
.formGroup input {
    width: 90%;
    padding: 10px;
    margin-bottom: 10px;
    border-style: none;
    padding-left: 30px !important;
}
 
 
/* Code for Icones inside html form input */
.formGroup i {
    position: absolute;
    left: 1px;
    top: 1px;
    color: grey;
    font-size: smaller;
    margin: 10px !important;
}
 
 
input::placeholder {
    position: relative;
    left: 20px;
}
input:focus{
    border-color: red;
}
.checkBox{
    width: 100%;
    margin-top: 2px;
}
 
.btn{
    width: 70%;
    padding: 15px;
    background-color: rgb(26, 68, 78);
    margin-top: 15px;
    color: lavender;
    border-radius: 20px;
    border-style: none;
}
.btn2{
    width: 70%;
    padding: 15px;
    background-color:transparent;
    margin-top: 15px;
    color: rgb(2, 43, 53);
    border-radius: 20px;
    border-style: none;
    border: 2px solid rgb(15, 53, 54);
}
 
/* CSS mouse hover efects */
.btn:hover, .btn2:hover, .icon:hover{
    background-color: rgb(86, 156, 202);
    color: whitesmoke;
}
@media screen and (max-width:600px) {
    .formDiv{
        width: 80%;
        border-radius: 10px 10 px 10 px 10px ;
    }
    .welcomeDiv{
        display: none;
    }
}


</style>
 
<body>
    
        <div class="container">
            <dive class="formWraper">
    
                <!-- Left section of responsive registration form -->
    
                <div class="formDiv">
                    <h2>Login As a Patient</h2>
                    <p class="text"> Log In with Social Media</p>
    
                <!-- Font Awesome Icons -->
                    <div class="socialBtn">
                        <div class="facebook icon"><i class="fab fa-facebook-f"></i></div>
                        <div class="twitter icon"><i class="fab fa-twitter"></i></div>
                        <div class="instagram icon"><i class="fab fa-instagram"></i></i></div>
                    </div>
                    
                    <!--Horizontal Line-->
                    <hr>
                    <div class="orDiv">Or</div>

                    <form method="POST" action="LoginP.php">
                        <p class="text">Log In with your Account</p>
                        <p class="formGroup">
                            <i class="far fa-user"></i>
                            <input type="text" username="username" id="name" name="PUsername" required placeholder="UserName">
                        </p>
                        
                        <p class="formGroup">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" id="password" name="PPassword" required placeholder="Password">
                        </p>
                        <div class="checkBox">
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <span class="text">I Agree with Term & Conditions.</span>
                        </div>
                        <button class="btn" type="submit" value="Submit">SIGN IN</button>
                        <p class="text">Don't have an account?   <a href="signupP.php">REGESTER NOW!</a></p>
                    </form>
                </div>
    
                <!-- Right section of responsive registration form -->
                <div class="welcomeDiv">
                    <h2><b>Welcome Back!</b></h2>
                    <p class="text"><b>Get in touch with us for our
                        <br> news letter and more updates.</b></p>
                    

                </div>
    
            </div>
        </div>
    
 
</body>
 
      
   
 

 
</html>