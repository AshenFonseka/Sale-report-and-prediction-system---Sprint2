<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="assignment3"/>
		<meta name="keywords" content="access.php"/>
		<meta name="author" content="Adeepa Uwanpriya Hettiwaththage"/>
		<title>Access Page</title>
		<link href= "styles/style.css" rel="stylesheet" />
		<script src="scripts/apply.js"></script>
	</head>
	<body>
																	<!--These codes are for Enhancement-->
	<?php
		include_once("header.inc");
	?>
	
	<?php
		include "settings.php";
		$User_name = $_POST['User_name'];
		$Password = $_POST['Password'];
		$ID = $_POST['ID'];
		$First_name = $_POST['First_name'];
		$Last_name = $_POST['Last_name'];
		$Email = $_POST['Email'];
		session_start();

		$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
		if($ID){														// insert those informations to the database
			$query= "INSERT INTO login_form (ID, First_name, Last_name, Email, User_name, Password) VALUES('{$ID}', '{$First_name}', '{$Last_name}', '{$Email}','{$User_name}', '{$Password}')"; 
			@mysqli_query($conn, $query); 
			header("refresh:1;url=log.php");
		}else{															
			$query="SELECT * FROM `login_form` WHERE `User_name`='$User_name' && `Password`='$Password'";
			$result=mysqli_query($conn, $query);
			$count=mysqli_num_rows($result);
			if($count==1){
				$_SESSION['log']=1;
				header("refresh:1;url=manage.php");
			}
			else{
				echo "<p>Error: Your Username or Password is wrong. Please enter the correct details.</p>";		//Error message
			}
		}
	?>
	
	<p><button onclick="location.href='log.php';">Back</button><p>
	
	<?php
		include_once("footer.inc");
	?>
	
</body>
</html>