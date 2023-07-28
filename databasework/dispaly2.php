<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
   <?php
   include "connection3.php";
   //query for retriving the data
   $displayQuery="SELECT * FROM tbl_std;";
   //executing query
   $diplayExe=mysqli_query($conn,$displayQuery);

   echo "<table border='1'>";
   echo"<tr>";
   echo"<td>username</td>";
   echo"<td>password</td>";
   echo"<td>repassword</td>";
   echo"<td>Gender</td>";
   echo"<td>course</td>";
   echo"<td>Operation</td>";
   echo"</tr>";

   while($row = mysqli_fetch_assoc($diplayExe))
   {
    $username=$row['username'];
    $password=$row['password'];
    $repassword=$row['repassword'];
    $gender=$row['gender'];
    $course=$row['course'];
    echo"<tr>";
    echo"<td>$username</td>";
    echo"<td>$password</td>";
    echo"<td>$repassword</td>";
    echo"<td>$gender</td>";
    echo"<td>$course</td>";
    echo"<td> <a href='Edit.php?username=$uname &password=$pass &repassword=$repass'>edit</a> &nbsp;
    <a href='delete.php?uname=$username'>delete</a></td> &nbsp";


    echo"</tr>";
    
   }
   echo "</table>";
   ?> 
</body>
</html>