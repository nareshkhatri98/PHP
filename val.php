<?php
if(empty($_POST['id'])||
   empty($_POST['username'])||
   empty($_POST['password'])||
   empty($_POST['Gender']))
   {
    echo"please fill the all fields";
   }
   else{
    include "connection.php";
    $id=$_POSt['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $Gender=$_POSt['Gender'];

    $insertQuery="insert into tbl_std values('$id',$username','$password','$Gender')";
    $insertExe=mysqli_query($conn,$inserquery);
    if($insertExe)
    {
        echo"data inserted";
    }
    else{
        echo" error";
    }

   }
   ?>