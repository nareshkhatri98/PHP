<?php
include "connection3.php";
$delname=$_GET['uname'];//username of person whose record is to be delete.
$delQuery="delete from tbl_std where username='$delname'";
$delExe=mysqli_query($conn,$delQuery);
if($delExe)
{
    header("Location:display2.php");
}else{
    echo"record cannot be deleted at the moment";
}
?>


