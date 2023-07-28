<?php
include"connection.php";
$dispalyquery="SELECT *FROM tbl_std";
$displayExe=mysqli_query($conn,$dispalyquery);
echo"<table border="1">";
echo"<tr>";
echo"<td>id</td>";
echo"<td>username</td>";
echo"<td>password</td>";
echo"<td>gender</td>";
echo"</tr>";
while($_row=mysqli_fetch_assoc($displayExe)){

    $id=$_row['id'];
    $username=$_row['username'];
    $password=$_row['password'];
    $Gender=$_row['Gender'];

    echo"<tr>"
    echo"<td>$id</td>";
    echo"<td>$username</td>";
    echo"<td>$password</td>";
    echo"<td>$Gender</td>";
    echo"</tr>";
    echo" <a href='delete.php?id=$id'>delete</a></td> &nbsp";

}
echo"</table>";
?>
