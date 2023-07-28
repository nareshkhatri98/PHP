<?php
if(empty($_POST["id"])|| empty($_POST["nam"])|| empty($_POST["pass"])|| empty($_POST["repass"])||empty($_POST["deprt"])||
  empty($_POST["gender"])||
  empty($_POST["poss"])||
  empty($_POST["ph"]))
  {  
    echo "fill the all fields";
 }
 else{
    include "connection1.php";
    $id=$_POST['id'];
    $name=$_POST['nam'];
    $password=$_POST['pass'];
    $repassword=$_POST['repass'];
    $depart=$_POST['deprt'];
    $gender=$_POST['gender'];

    $position=$_POST['poss'];
    $phone=$_POST['ph'];

    //query
    $insert_query = "insert into tbl_emp (id,name,password,repassword,depart,gender,position,phone) values ('$id','$name','$password' ,'$repassword','$depart','$gender','$position','$phone');";
    $result=mysqli_query($conn,$insert_query);
    if($result)
    {
        echo"data inserted";
    }
    else{
      echo"insertion is fail";
    }
 }
 ?>