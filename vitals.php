<?php

$ruser = 'oGI7KynQVD';
$rpass = 'GAeI6ZJ9EC';
$rdb = 'oGI7KynQVD';

$rdatabase = mysqli_connect('remotemysql.com', $ruser , $rpass, $rdb );

if (isset($_GET['ID'])) {
  $ID = mysqli_real_escape_string($rdatabase, $_GET['ID']);


  $sql = "SELECT * FROM Pateints WHERE idPateints = '$ID' ";
  $result = mysqli_query($rdatabase,$sql);
  $row = mysqli_fetch_array($result);
}

if (isset($_GET['ID'])) {
  $ID = mysqli_real_escape_string($rdatabase, $_GET['ID']);

  $sql2 =  $sql = "SELECT * FROM Vitals WHERE idPateints = '$ID' ";
  $result2 = mysqli_query($rdatabase,$sql);
  $row2 = mysqli_fetch_assoc($result2);

}

if($_SERVER['REQUEST_METHOD'] == "POST"){

  $PPriscription = $_POST['PPriscription'];
  $PNotes = $_POST['PNotes'];

  if(isset($_POST['PPriscription'])){

    $query = "INSERT INTO Priscription (PPriscription) VALUE ('$PPriscription')";
    mysqli_query($rdatabase,$query);

  }
  else{
    echo "Failed to enter priscription";
  }

  if(isset($_POST['PNotes'])){

    $query2 = "INSERT INTO Notes (PNotes) VALUE ('$PNotes')";
    mysqli_query($rdatabase,$query2);

  }
  else{
    echo "Failed to enter Note";
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
    <title>Patient Details | RELIEF</title>
</head>
 <style>
  body {
    background-image: url(images/blog2.jpg);
    background-size: cover;
    align-items: center;
    background-color: #000;
    display: flex;
    justify-content: center;
    height: 100vh;
  }

  .form {
    background-color: #1b1e41;
    border-radius: 20px;
    box-sizing: border-box;
    height: 500px;
    padding: 50px;
    width: 700px;
    display:flex;
    
  }

  .title {
    color: #eee;
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
    margin-top: 60px;
  }



</style>
<body>
  <div class="form">

    <div>
      <div class="title"><?php echo $row['PUsername'] ?></div>
    
        <div class="input-container ic1">
          <P style="color: azure;">PATIENT'S VITALS FOR : <?php echo $row['PDiseases'] ?></P>
              
            <table border="3">

                <tr>
                  <th width="100">Date Time</th>
                  <th width="">Vitals</th>
                </tr>
            

                <?php
                    while($rows = mysqli_fetch_assoc($result2))
                    {
                ?>
        
                        <tr>
                            <td><?php echo $rows['Timestamp']; ?></td>
                            <td><?php echo $rows['PVitals']; ?></td>
                        </tr>
        
                <?php 
                    }
                    
                ?>
            </table>
        </div>
            
      </div>

      <div style="margin-left: 50px;">
        <form method="post" action="vitals.php" style="margin-left: 50px;" >
          <p class="input-container ic1">
                  <input name="PPriscription" class="input" type="text" placeholder="ADD NEW PRISCRIPTION " style="height: 70px;"/><br>
                <br>  <input class="submit" type="submit" value="+ PRISCRIPTION  " style="height: 60px;"><br>
          </p>
        </form><br><br>

        <form method="post" action="vitals.php" style="margin-left: 50px; height: 90px;">
        
          <p class="input-container ic1">
                  <input name="PNotes" class="input" type="text" placeholder="ADD A NOTE " style="height: 70px;" /><br>
                  <br><input class="submit" type="submit" value="+ ADD NOTE  " style="height: 60px;">
        
          </p>

        </form>
      </div>

        
    
    </div>
      
</body>
</html>
