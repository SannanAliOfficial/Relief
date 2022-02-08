<?php
  session_start();

  $ruser = 'oGI7KynQVD';
  $rpass = 'GAeI6ZJ9EC';
  $rdb = 'oGI7KynQVD';
    
  $rdatabase = mysqli_connect('remotemysql.com', $ruser , $rpass, $rdb );

  if(isset($_SESSION['username']))
  {
    $PUsername = $_SESSION['username'];
  }

  if(isset($PUsername)){
      
    $query = "SELECT idPateints FROM Pateints WHERE PUsername = '$PUsername'";
    $result = mysqli_query($rdatabase, $query);
    $results = mysqli_fetch_assoc($result);
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

    
    <style>
        body {
            background-image: url(images/blog2.jpg);
            background-size: cover;
            align-items: center;
        
            /* background-image: url();*/

            display: flex;
            justify-content: center;
            height: 100vh;
        }

        .form {
            background-color: #3b5d66;
            border-radius: 10px;
            box-sizing:content-box;
            height: 380px;
            padding: 50px;
            width: 600px;
            display: flex;
        }
            
        }

        .title {
            color: rgb(34, 27, 27);
            font-family: sans-serif;
            font-size: 25px;
            font-weight: 600;
        
        }

        table {
            width: 300px; 
            border-collapse: collapse; 
            margin:10px auto;
            background-color: rgba(0, 128, 128, 0.548);
            }
            td {
                padding: 20px 10px 15px 15px;
                color: rgb(236, 223, 223);
            }
            th {
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-size: 90%;
            border-top: 1px solid #999;
            text-align: left;
            padding: 20px 10px 15px 15px;
            background-color: #fff;
            }
            tr.even {
            background-color: #efefef;
            }
            tr:hover {
                background-color: #ffff;
                color: rgb(188, 240, 240);    
            }

        .input-container {
            height: 50px;
            width: 100%;
        }

        .ic1 {
            margin-top: 40px;
        }



    </style>
    <body>
        <div class="form">

            <div>

                <?php
                    if(isset($_SESSION['username'])) : ?>
                
                    <div class="title">
                        <p> WELCOME <strong><?php echo $_SESSION['username']; ?></strong></p>      
                    </div>
                
                <?php endif ?>
                <div class="input-container ic1">
                    <P style="color: rgb(21, 24, 24); margin-top: -39px;">View All Information here.</P>
                            
                </div>
                        
            </div>

            <div>
                <form method="post" action="vitals.php"  >
                    <p class="input-container ic1">
                    <input name="PVitals" class="input" type="text" placeholder="ENTER VITALS " style="height: 70px; margin-left: -179px;"/><br>
                    <br>  <input class="submit" type="submit" value="+ VITALS  " style="height: 60px; margin-left: -179px"><br>
                    </p>
                </form><br><br><br>

                <div>
                
                    <p class="input-container ic1">
                        <div>    
                            <h3 style="margin-top: -260px;margin-left: 150px;">PRISCRIPTION:</h3>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <th>Priscriptions</th>
                                </tr>
                                <?php

                                    if(isset($result)){
                                        $query3 = "SELECT * FROM Priscription WHERE idPateint = '$result' DESC";
                                        $pris = mysqli_query($rdatabase, $query3);
                                    }
                                    while($rows2 = mysqli_fetch_assoc($pris)){
                                ?>

                                    <tr>
                                        <td><?php echo $rows2['PNotes']; ?></td>
                                    </tr>
                                <?php 
                                    }
                                ?>
                            </table>
                        </div>
                        <br> 
                    </p>
                </div>
                <br> <br>
                <div>
                
                    <p class="input-container ic1">
                        <div>    
                            <h3 style="margin-top: -260px;margin-left: 150px;">Notes:</h3>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <th>Notes:</th>
                                </tr>
                                <?php

                                    if(isset($result)){
                                        $query2 = "SELECT * FROM Notes WHERE idPateintss = '$result' DESC";
                                        $notes = mysqli_query($rdatabase, $query2);
                                    }
                                    while($rows = mysqli_fetch_assoc($notes)){
                                ?>

                                    <tr>
                                        <td><?php echo $rows['PNotes']; ?></td>
                                    </tr>
                                <?php 
                                    }
                                ?>
                            </table>
                        </div>
                        <br> 
                    </p>
                </div>
            </div>

            
        
        </div>
    </body>

</html>