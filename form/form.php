<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
 
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  <label>Name</label>
  <input type="text" name="name"><br>
  <label>Address</label>
  <input type="text" name="address"><br>
  <label>Bio</label>
  <input type="textarea" name="bio"><br>
  <button type="Submit">Submit</button>
  </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo $_POST['name'];
  echo"<br>";
  echo $_POST['address'] ;
  echo"<br>";
  echo $_POST['bio'];

}
?>