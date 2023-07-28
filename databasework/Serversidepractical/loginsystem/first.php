<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form action="login.php" method="post">
		<label for="username">Username:</label><br>
		<input type="text" id="username" name="username"><br>
		<label for="password">Password:</label><br>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Submit">
	</form> 
</body>
</html>

<?php

// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$db = 'swsc';

$conn = mysqli_connect($servername, $username, $password, $db);

if ($conn) {
	echo"Connection complete ";
}
else{
	echo"error";
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Validate the form data
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	if (empty($username) || empty($password)) {
		echo "Username and password are required fields.";
	} else {
		// Insert the new user into the database
		$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
		mysqli_query($conn, $query);

		// Select the user from the database
		$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) {
			// Login successful
			// Set a session variable or cookie to indicate that the user is logged in
			// Redirect the user to the appropriate page
		} else {
			// Login failed
			// Display an error message and allow the user to try again
		}
	}
}

mysqli_close($conn);

?>