
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<link rel="stylesheet" type="text/css" href="login.css">
	
</head>
<body>

	<div class="box">
		<h2>Login</h2>
		<form action="loginuser.php" method="get">
			<div class="inputBox">
					<input type="text" name="email" required="" placeholder="">
					<label>Email</label>
			</div>
			<div class="inputBox">
					<input type="password" name="password" required="" placeholder="">
					<label>Password</label>
			</div>
			<input type="submit" name="Login" value="submit">
			<p>Not a user<a href="signup.php"> Register</a></p>
		</form>
	</div>

</body>
</html>