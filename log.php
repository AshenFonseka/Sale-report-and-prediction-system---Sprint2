<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="assignment3"/>
		<meta name="keywords" content="log.php, enhancement"/>
		<meta name="author" content="Adeepa Uwanpriya Hettiwaththage"/>
		<title>LOGIN</title>
		<link href= "styles/style.css" rel="stylesheet" />
		<script src="scripts/apply.js"></script>
	</head>
	<body>
																		<!--These Codes For Enhancements-->
	<?php
		include_once "header.inc";	
		include_once "menu.inc";
		require_once("settings.php");
		session_start();
	?>

		<h1>Login: </h1>												<!--LOGIN Form-->
		<form method="POST" action="access.php">
			<dl>
				<dt>Enter Username :</dt>
				<dd><input type="text" name="User_name"></dd>
				<dt>Enter Password :</dt>
				<dd><input type="password" name="Password"></dd>
			</dl>
			<p><input type="submit" value="LOGIN"><p>
		</form>
		<hr>
		<h1>Register: </h1>												<!--Register Form-->
		<form method="POST" action="access.php">
			<dl>
				<dt>Enter ID:</dt>
				<dd><input type="text" name="ID"></dd>
				<dt>Enter First Name:</dt>
				<dd><input type="text" name="First_name"></dd>
				<dt>Enter Last Name:</dt>
				<dd><input type="text" name="Last_name"></dd>
				<dt>Enter E-Mail:</dt>
				<dd><input type="text" name="Email"></dd>
				<dt>Enter User name:</dt>
				<dd><input type="text" name="User_name"></dd>
				<dt>Enter Password:</dt>
				<dd><input type="password" name="Password"></dd>
			</dl>
			<p><input type="submit" value="Register"></p>
		</form>
		
	<?php
		include_once("footer.inc"); 
		session_destroy();
	?>
	</body>
	</html>