
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" href="images/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <!-- js link -->
    <script src="index.js"></script>

    <!-- fonts link  -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

    <!-- fonts Awesome link  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Doctor's Portal | RELIEF </title> 
</head>

<style>
    h1{
        text-align: center;
        text-transform: capitalize;
        padding-top: 20px;

    }
    body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
        background-image: url(./images/booking-bg.jpg);
        background-size:cover;
        background-attachment:fixed;
    }


    table {
    width: 780px; 
	border-collapse: collapse; 
	margin:50px auto;
    background-color: rgba(0, 128, 128, 0.548);
    }
    td {
        padding: 20px 10px 15px 15px;
        color: black;
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
        color: teal;    
    }
    .money {
    text-align: right;
    }
    table:hover{
    box-shadow: 1px 1px 7px -2px;
    cursor: pointer;
    }
    input{
        background-color: #ffff;
        color: teal;
    }
    input:hover{
    background-color: teal;
    color: #ffff;
    }
</style>

<body>
    <h1><u>List of Pateints</u></h1>
    <table border="3">

            <tr>
                <th width="100">Patient Id</th>
                <th width="200">Patient Username</th>
                <th width="200">Email</th>
                <th width="100">Year of Birth</th>
                <th width="100">Diesease</th>
                <th width="50">Gender</th>
            </tr>
        <?php
            
            $ruser = 'oGI7KynQVD';
            $rpass = 'GAeI6ZJ9EC';
            $rdb = 'oGI7KynQVD';

            $rdatabase = mysqli_connect('remotemysql.com', $ruser , $rpass, $rdb );
            $query = "SELECT * FROM Pateints";

            $result = mysqli_query($rdatabase,$query);

            while($rows = mysqli_fetch_assoc($result))
            {
        ?>

                <tr>
                    <td><?php echo $rows['idPateints']; ?></td>
                    <td><?php echo $rows['PUsername']; ?></td>
                    <td><?php echo $rows['PEmail']; ?></td>
                    <td><?php echo $rows['PDOB']; ?></td>
                    <td><?php echo $rows['PDiseases']; ?></td>
                    <td><?php echo $rows['PGender']; ?></td>
                </tr>

        <?php 
            }
        ?>

    

       
    </table>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>