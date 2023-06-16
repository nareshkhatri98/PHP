<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>addtion</title>
</head>
<body>

  
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  Number1: <input type="number" name="num1"> <br>
  Number2: <input type="number" name="num2">
  <button type="submit">Sumbit</button> 

  </form>
</body>
</html>
<?php
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1+$num2;
    echo "The sum of two number is ".$result;

   }
?>