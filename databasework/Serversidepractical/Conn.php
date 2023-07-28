<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $severname="localhost";
    $username="root";
    $password="";
    $db="ncss";
    $conn=mysqli_connect($severname,$username,$password,$db);
    if($conn)
    {
        echo"connection sucessfull";
    }
    else{
        echo"erron on connection";
    }
</body>

