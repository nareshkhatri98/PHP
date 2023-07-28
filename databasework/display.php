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
   include "connection.php";
   //query for retriving the data
   $displayQuery="SELECT * FROM st_info;";
   //executing query
   $diplayExe=mysqli_query($conn,$displayQuery);

   echo "<table>";
   echo"<tr>";
   echo"<td>Rollno</td>";
   echo"<td>Name</td>";
   echo"<td>Phone</td>";


   echo"<td>Gender</td>";
   echo"</tr>";

   while($row = mysqli_fetch_assoc($diplayExe))
   {
    $roll=$row['Rollno'];
    $name=$row['Name'];
    $phone=$row['Phone'];
    $faculty=$row['Faculty'];
    $gender=$row['Gender'];
    echo"<tr>";
    echo"<td>$roll</td>";
    echo"<td>$name</td>";
    echo"<td>$phone</td>";
    echo"<td>$faculty</td>";
    echo"<td>$gender</td>";
    echo"</tr>";
    
   }
   echo "</table>";
   ?> 
</body>
</html>