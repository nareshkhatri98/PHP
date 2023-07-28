<?php
$server="local host";
$usernmae="root";
$password="";
$db="db_college";
$conn=mysqli_query($server,$username,$password,$db);
if($conn)
{
    echo"connection complete";
}
else{
    echo"connection fail";
}
?>
