<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration System Using PHP and MySQL Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>

<form method="post" action="register.php">
	<!--display validation errors here-->
	<?php  include ('errors.php'); ?>

	<div class="input-group">
		<label>Username</label>
		<input type="text"name"username">
	</div>
		<div class="input-group">
		<label>Email</label>
		<input type="text"name"email">
	</div>
		<div class="input-group">
		<label>Password</label>
		<input type="password"name"password_1">
	</div>
		<div class="input-group">
		<label>Conform Password</label>
		<input type="password"name"password_2">
	</div>
	<div class="input-group">
		<button type="sumit" name="Register" class="btn">Register</button>
		<p>
			Aready a member? <a href="login.php">Sing in</a>
		</p>
	</div>
</form>
</body>
</html>