<?php
session_start();
if(isset($_SESSION['PUsername'])){
    $_SESSION['msg'] = 'you must log in to view this page';
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
        <button><a href="Pportal.php?logout='1'"></a></button>
        <?php
        if(isset($_SESSION['success']) && isset($_SESSION['PUsername'])) : ?>
         
        <div>
            <h3>
                <?php 
                
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);


                    
                ?>
            </h3>
        </div>    
        <?php endif ?>

        <?php if(isset($_SESSION['PUsername'])) : ?>
        <h3>Welcome <strong><?php echo $_SESSION['PUsername']; ?></strong></h3>
        
        <?php endif ?>

        

    </body>

</html>