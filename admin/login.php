<!DOCTYPE html>
<?php
session_start();
$error = isset($_SESSION['error']) ? $_SESSION['error'] : null;
$user_data = isset($_SESSION['user_data']) ? $_SESSION['user_data'] : null;
if($user_data!=null){
	header('Location:index.php');
}
?>

<html>
<head>
	<title>Login parol</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
<div class="box">
	<?php if($error):?>
        <div id="alert">
            Login or parol are wrong!
        </div>
    <?php endif ?>
	<form action="check/access.php"  method="POST">	
		<h1>Login Here</h1>
		<input type="text" name="login" placeholder="Username" autocomplete="off">
		<input type="password" name="password" placeholder="Password" maxlength="10" autocomplete="off">
		<a href="">Forget password</a>
		<input type="submit" name="" value="Login">
	</form>
</div>
</body>
</html>
<?php 
	unset($_SESSION['error']);
?>