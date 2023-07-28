<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="val2.php">
    <label>username</label>
    <input type="text" name="uname"><br>
    <label> Password</label>
    <input type="text" name="pass"><br>
    <label>repass</label>
    <input type="text" name="repass"> <br>
    <label > gender</label>
    <input type="radio" name="gender" value="m">male &nbsp;
    <input type="radio" name="gender" value="f">female &nbsp;<br>
    <label >course</label> 
    <select name="crc" ><br>
        <option value="BCA">BCA</option>
        <option value="BIM">BIM</option>
    </select>
    <input type="submit" name="submit" value="submit"><br>
    <input type="reset" name="reset" value="reset"><br>
</form>

</body>
</html>