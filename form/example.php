<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  <input type="text" name="a">
  <input type="text" name="b">
  <input type="submit" name="submit" value="submit">
 </form>

 <?php
 if($_SERVER["REQUEST_METHOD"]== "POST"){
  function abc(){
    $aa=12;
    $ab=13;
    $c= $ab+$aa;
    

  }

 }
 ?>
</body>
</html>