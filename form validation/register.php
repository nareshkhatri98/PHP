
<?php
include_once('connect.php');

//collect info from the register form
$fullname = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];
$user_role="user";

//inserting data into database
$sql = "INSERT into users(fullname, address, email, password, 


user_role) values('$fullname', '$address', '$email', '$password','$user_role')";
$query = $conn->query($sql);

if(!$query){
    echo "data insertion failed!";
}
else{
   // echo "data added successfully!"; 
   header('location: login_form.php');
}
?>