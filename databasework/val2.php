<?php
if(empty($_POST['uname'])|| empty($_POST['pass'])|
empty($_POST['repass'])|| empty($_POST['gender'])|| empty($_POST['crc']))
{
    echo "please fill the all fields";
}
else{
    include "connection3.php";
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $repassword=$_POST['repass'];
    $gender=$_POST['gender'];
    $course=$_POST['crc'];

    // query
    $insertQuery="insert into tbl_std values('$username','$password','$repassword','$gender','$course')";
    $insertExe=mysqli_query($conn,$insertQuery);
    if($insertExe)
    {
        echo "data insert";
        header("Location.display3.php");



        
    }
}