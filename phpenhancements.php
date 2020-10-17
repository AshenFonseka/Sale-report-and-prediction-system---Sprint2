<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset= "utf-8" />
	<meta name="description" content="Assignment3" />
	<meta name="keywords" content="Next, Enhancements"/>
	<meta name="author" content="Adeepa Uwanpriya Hettiwaththage" />
	<title> Enhancement 3 </title>
	<link href= "styles/style.css" rel="stylesheet" />
	<script src="scripts/enhancements.js"></script>
	</head>
	<body id="enhancements2"> 
	
	<?php   
		include_once("header.inc");
		include_once("menu.inc");
	?>
	<h1 id="job"> Enhancements </h1>
	<section id="enh1">
		<h2 class="enhp">Registration</h2>
		<p class="enhp"> 
		This Enhancement have create a registration page. Therefore all users want to register before use manage.php page. So there is a server side validation and store all data of users into a database. 
		I wanted make my website more secure and I wanted to make a login and logout, Due to those reasons I made this. And at the same time,
		now I can see who Registered and I can control those data of users. 
		However to create this I got some helps from w3schools website and from a senior student.
		<br/>
		<a href="reference.php" title="click here to view the site"> Refernce:</a>  <!--Refernce the website that provide informationto do this -->
		</p>
		</section>
		<section id="enh2">
		<h2 class="enhp">Login and logout functions</h2>
		<p class="enhp">
		THis is my second php enhancment. So I created login and logout functions . So all users want to login and they also can logout after
		they used the manage page. And specially for users can't be entered to manager's page dircetly using the URL. So for that they need to login first. And logout button only displays when users login.
		I think this makes more secure the website and to make these, I got helps from a senior student and rest code from w3schools website.
		<br/>
		<a href="reference.php" title="click here to view the site">Refernce:</a> <!--Refernce the website that provide informationto do this -->
		</p>
		</section>	
		
		<br/>
		
		<!--footer-->
		<?php
			include_once("footer.inc");
		?>
	</body>