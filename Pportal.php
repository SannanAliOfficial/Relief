<?php
session_start();
if(isset($_SESSION['PUsername'])){
    $_SESSION['msg'] = 'you must log in to view this page';
    header("Location: LoginP.php");
}

if(isset($_GET['logout'])){
    session_destroy(); 
    unset($_SESSION['PUsername']);
    header("Location: LoginP.php");
} 


?>

<!doctype html>
<html>
    <head>
        <link rel="icon" href="images/logo.png">
        <title>Home Page | RELIEF </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    </head>

    <body>
        <?php
        if(isset($_SESSION['success'])) : ?>
         
        <div>
            <h3>
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);


                    echo $_SESSION['PUsername'];
                ?>
            </h3>
        </div>    
        <?php endif ?>

    </body>

</html>