<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="db_college";
    $conn=mysqli_connect($servername,$username,$password,$db);
    if($conn)
    {
        echo"connection secussfull";
    }
    else{
        echo "error on connection";
    }
    ?>