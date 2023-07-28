<?php
include "connection.php";
$delid=$_GET['id'];
$delquery="delete from tbl_std where id='$id'";
$delexe=mysqli_query($conn,$delid);
if($delexe)
{
    header("Location:dispay.php");
}
else{
    echo" cannot delete";
}