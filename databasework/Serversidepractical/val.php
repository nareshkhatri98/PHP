<?php
if(empty($_POST["id"])||empty($_POST["Password"]||)
empty($_POST["RePassword"]||)||empty($_POST["Gender"]||)
empty($_POST["DOB"]||)
empty($_POST["Degree"]||)
empty($_POST["Grade"]||)
empty($_POST["course"]||)){
    echo"please fill all fields..";
}
else{
    $ID=$_POST['id'];
    $Password=$_POST['Password'];
    $RePassword=$_POST['RePassword'];
    $Gender=$_POST['Gender'];
    $Birth=$_POST['DOB'];
    $Degree=$_POST['Degree'];
    $Grade=$_POST['Grade'];
    $Course=$_POST['course'];
    include "Conn.php"

    // query
    $inserrtQuery="insert into st_reg values($ID,'$Password','$RePassword',
    '$Gender','$Birth','$Degree',
    '$Grade','$Course)";
    $inserExe=mysqli_query($conn,$inserrtQuery);

    if($inserExe)
    {
        echo" data are inserted";
    }
    else{
        echo" error";
    }
}

