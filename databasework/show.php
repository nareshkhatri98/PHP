<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "connection1.php";
    $showQuery="SELECT * FROM tbl_emp;";

    $showExe=mysqli_query($conn,$showQuery);

    echo "<table border=1>";
    echo "<tr>";
    echo "<td>id</td>";
    echo "<td> name</td>";
    echo"<td>password</td>";
    echo"<td>repassword</td>";
    echo"<td>depart</td>";
    echo"<td>gender</td>";
    echo"<td>position</td>";
    echo"<td>phone</td>";
    echo"<td>operation</td>";
    echo"</tr>";

    while($row=mysqli_fetch_assoc($showExe))
    {
    
        $id=$row['id'];
        $name=$row['name'];
        $password=$row['password'];
        $repassword=$row['repassword'];
        $depart=$row['depart'];
        $gender=$row['gender'];
        $position=$row['position'];
        $phone=$row['phone'];
        
        echo"<tr>";
        echo"<td>$id</td>";
        echo"<td>$name</td>";
        echo"<td>$password</td>";
        echo"<td>$repassword</td>";
        echo"<td>$depart</td>";
        echo"<td>$gender</td>";
        echo"<td>$position</td>";
        echo"<td>$phone</td>";
        echo"<td> <a href=''>edit</a> &nbsp
          <a href=''>delete</a>delete</td> &nbsp";
        echo"</tr>";
    }
    echo"</table>";
    ?>
</body>
</html>