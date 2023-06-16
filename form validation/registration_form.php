<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<div class="form-container">

<form action="register.php" method="POST">
   <h3>register</h3>
   <input type="text" name="name" required placeholder="enter your name">
   <input type="text" name="address" required placeholder="enter address">
   <input type="email" name="email" required placeholder="enter your email">
   <input type="password" name="password" required placeholder="ente your password">
  
   <input type="submit" name="submit" value="register now" class="form-btn">
   <p>already have an account? <a href="login_form.php">login here</a></p>
</form>

</div>
  </body>
</body>
</html>