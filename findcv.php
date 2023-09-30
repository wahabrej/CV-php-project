<?php

include 'config.php';

$_SESSION["dob"]=$dob;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .div{
            padding: 50px;
            height:200px;
            width:400px;
            text-align: center;
            margin-top: 300px;
            color: black;
            background-color: paleturquoise;
        }

    </style>
</head>
<body>
    <center>
        <div class="div">
    <form style="margin-top: 30px;">
  ID: <input type="text" name="id" ><br><br>
  DOB: <input type="date"name="dob" ><br><br>
  <input type="submit" name="submit" value="Find CV">
  </form>
  </div>
</center>
</body>
</html>