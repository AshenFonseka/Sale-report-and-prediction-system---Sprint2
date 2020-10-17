<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset= "utf-8" />
	<meta name="description" content="Assignment2" />
	<meta name="keywords" content="Next, Enhancements"/>
	<meta name="author" content="Adeepa Uwanpriya Hettiwaththage" />
	<title> Enhancement 2 </title>
	<link href= "styles/style.css" rel="stylesheet" />
	<script src="scripts/enhancements.js"></script>
	</head>
	<body id="enhancements2">
	
	<?php   
		include_once("header.inc");	//using include files 
		include_once("menu.inc");
	?>
	
	<p id="demo">Time:</p>
	<div id="txt"></div>
	<h1 id="job"> Enhancements </h1>
	<section id="enh1">
		<h2 class="enhp">Clock & Timer</h2>
		<p class="enhp"> This enhancement is illustrating a Clock and a Timer. I made a timer in Enhancement page to display an alert to user, So 
			I am using this to welcome the users. And at the same time I add a clock 
			at top of the page. So user can see the clock and know the current time. So, if we want we can also use this in apply page to limit the time that users gets to fill the application 
			However, W3School website helped me with code.
		
		<br/>
		<a href="https://www.w3schools.com/jsref/met_win_settimeout.asp" title="click here to view the site"> Refernce:</a>  <!--Refernce the website that provide informationto do this -->
		</p>
		</section>
		<section id="enh2">
		<h2 class="enhp">Open a New window ,Close and Check</h2>
		<p class="enhp">This enhancement shows how to open a new window when clicking on a button and how to close it and check whether it is closed or not 
		when pressing on a button. These part is not mentioned in our lecture note so, i selected as an Enhancement. I made a reference page and I am opening it
		by using this method and i selected enhancement2.html page to diplay these buttons. I found this in w3school.
		<br/>
		<a href="https://www.w3schools.com/js/tryit.asp?filename=tryjs_win_closed" title="click here to view the site">Refernce:</a> <!--Refernce the website that provide informationto do this -->
		</p>
		</section>	
		
		<br/>
		
			<button type="button" id="ow">Open my Refernce Window</button>
			<button type="button" id="cw">Close my Refernce Window</button>
			<button type="button" id="iw">Is my Refernce Window open?</button>
			<button></button>
			<br/>
			<div id="msg"></div>
		<br/>
		<!--footer-->
		<?php
			include_once("footer.inc");
		?>
	</body>
	