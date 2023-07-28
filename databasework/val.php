<?php
if(empty($_POST["rl"])||empty($_POST["uname"])|| empty($_POST["ph"])||
empty($_POST["flc"])||empty($_POST["gender"]))
{
    echo "please fill  all the fields";
}
else{
    include "connection.php";
    $roll=$_POST['rl'];
    $name=$_POST['uname'];
    $phone=$_POST['ph'];
    $faculty=$_POST['flc'];
    $gender=$_POST['gender'];

    //query
    $insertQuery="insert into st_info values($roll,'$name',$phone,'$faculty','$gender')";
    $insertExe=mysqli_query($conn,$insertQuery);
    if($insertExe)
    {
        echo"data insert";
    }
}



?>