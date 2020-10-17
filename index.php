<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset= "utf-8" />
	<meta name="description" content="assignment1, assignment3" />
	<meta name="keywords" content="Next,"/>
	<meta name="author" content="Adeepa Uwanpriya Hettiwaththage" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> Home </title>
	<link href= "styles/style.css" rel="stylesheet"/> <!--link to the css file-->
	</head>
	<body> 
		
		<?php
			include_once("header.inc");
			include_once("menu.inc");
		?>
		
		<section id="p1">
		<h1 class="h1">Welcome to NEXT</h1>
		<p> Thanks for joining with us. So we can help you with so many ways. And <strong><em>new features</em></strong> and <strong><em>updates</em></strong> are released daily.
		<br/>
		please be kind enough to help us to create a simple, eye catching, very useful and ad-free social networks.
		</p>
		</section>
		<section id="sec1" >
			<h2 id="oit">Our IT Services</h2>
			<ul>     <!--An unordered list-->
			<li>IT Consulting
				<ul>
				<li>IT Strategy & Planning</li>
				<li>Disaster & Data Recovery</li>
				<li>IT Security & Risk Assessment</li>
				<li>Software Consulting</li>
				<li>Businesws Intelligence</li>
				<li>ERP Consulting</li>
				</ul>
			</li>
			<li>IT Outsourcing
				<ul>
				<li>IT Support</li>
				<li>Data Backup</li>
				<li>IT & Services</li>
				<li>Virtual CIO</li>
				</ul>
			</li>
			<li>Cloud Compututing Services
				<ul>
				<li>Microsoft Office 365</li>
				<li>Microsft Azure</li>
				<li>Microsft Share Point </li>
				<li>VoIP</li>
				<li>Cloud Hosting</li>
				</ul>
			</li>
			<li>IT Infrastructure
				<ul>
				<li>IT Procurement</li>
				<li>IT Installation</li>
				<li>Cloud & Data Migration</li>
				<li>Office IT Relocation</li>
				</ul>
			</li>
			</ul>
		</section> 
		<section class="tooltip">OUR SERVICE! <!--Enhancement- Tooltip-->
		<section class="tooltiptext">our philosophy is and always has been that its structures are right here to make our existence less complicated. a continuous and thorough audit of fees, network environment, cloud services, a point of sale, customer relationship management  & accounting software program, databasing software and hardware guarantees that fee for cash is at the vanguard of each unique commercial enterprise service and manner</section>
		</section>
		<!--footer-->
		<?php
			include_once("footer.inc");
		?>
	</body>
	</html>