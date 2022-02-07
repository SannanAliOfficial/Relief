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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  background-color: #15172b;
  border-radius: 20px;
  box-sizing: border-box;
  height: 500px;
  padding: 50px;
  width: 700px;
  
}

.title {
  color: #eee;
  font-family: sans-serif;
  font-size: 25px;
  font-weight: 600;
 
}



 </style>
<body>
      <div class="form" style="display: flex;">

        <div>
            <div class="title"><?php echo $row['PUsername'] ?></div>
    
            <div class="input-container ic1">
              <P style="color: azure;">PATIENT'S VITALS FOR : <?php echo $row['PDiseases'] ?></P>
              
              <table border="3">

                <tr>
                  <th width="50">Date Time</th>
                  <th width="50">Vitals</th>
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

            </div>
            
        </div>

        <div class="new">
            <form method="post" action="vitals.php" class="new2">
                <p class="input-container ic1">
                  <input name="PPriscription" class="input" type="text" placeholder="ADD NEW PRISCRIPTION " /><br>
                  <input class="submit" type="submit" value="+ PRISCRIPTION  ">
                </p>
            </form>
            <form method="post" action="vitals.php">
        
                <p class="input-container ic1">
                  <input name="PNotes" class="input" type="text" placeholder="ADD A NOTE " /><br>
                  <input class="submit" type="submit" value="+ ADD NOTE  ">
                </div> <br>

            </form>
        </div>

        
    
      </div>
</body>
</html>
