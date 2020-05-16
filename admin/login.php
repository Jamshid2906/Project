<?php include 'check/access.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Login parol</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
<div class="box">
	<form  method="POST">	
		<h1>Login Here</h1>
		<input type="text" name="login" placeholder="Username" autocomplete="off">
		<input type="password" name="password" placeholder="Password" maxlength="10" autocomplete="off">
		<a href="">Forget password</a>
		<input type="submit" name="" value="Login">
	</form>
</div>
</body>
</html>