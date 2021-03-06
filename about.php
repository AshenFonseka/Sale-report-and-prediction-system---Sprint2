<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="assignment1, assignment3"/>
		<meta name="keywords" content="student number, tutor's name, time table"/>
		<meta name="author" content="Adeepa Uwanpriya Hettiwaththage"/>
		<title> About me </title>
		<link href= "styles/style.css" rel="stylesheet" /> <!--link to the css file-->
	</head>
	<body>
	
		<?php
			include_once("header.inc");
			include_once("menu.inc");
		?>
		
		<h1 class="head">My Informations</h1>
		<section id="sec2">
			<dl>
				<dt>Name:</dt>
				<dd>Adeepa Uwanpriya Hettiwaththage</dd>
			</dl>
			<dl>
				<dt>Student number:</dt>
				<dd>102219681</dd>
			</dl>
			<dl>
				<dt>Tutor's name:</dt>
				<dd>Dr Eureka Priyardarshani</dd>
			</dl>
			<dl>
				<dt>Course:</dt>
				<dd>Bachelor's of Computer Science</dd>
			</dl>
		</section>
		<section id="fig">
			<figure>  <!--add image by using figure element-->
				<img id="me" src="images/myphoto.jpg" alt="My Photo" title="My Photo"/>
				<figcaption><em> &#160;&#160;&#160;&#160;Adeepa Hettiwaththage</em></figcaption>
			</figure>
		</section>
		<section id="timetable">  <!-- timetable -->
			<h2 id="ttt">Swinburne Timetables</h2>
			<table>
				<thead>
					<tr>
						<th colspan="2" scope="col">Monday</th>
						<th scope="col">Tuesday</th>
						<th scope="col">Wednesday</th>
						<th scope="col">Thursday</th>
						<th scope="col">Friday</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th rowspan="2" scope="row">8 am</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td rowspan="4">Creating Web Appllications<br/>Lecture 1(2)</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th rowspan="2" scope="row">9.00</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td rowspan="4">Networks and Switching <br/>Lecture 1(1)</td>
					</tr>
					<tr>
						<th rowspan="2" scope="row">10.00</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td rowspan="4">Creating Web Application<br/>Lab 1(9)</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th rowspan="2" scope="row">11.00</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th rowspan="2" scope="row">12 pm</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td rowspan="4">Introduction to Programmimg<br/>Lecture 1(1)</td>
						<td rowspan="4">Computer & Logic Essentials<br/>Lecture 1(1)</td>
						<td>&nbsp;</td>
						<td rowspan="4">Computer & Logic Essentials<br/>Tutorial 1(10)</td>
					</tr>
					<tr>
						<th rowspan="2" scope="row">1.00</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th rowspan="2" scope="row">2.00</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td rowspan="6">Networks and Switching<br/>Practical 1(3)</td>
						<td>&nbsp;</td>
						<td rowspan="4">Introduction to Programmimg<br/>Workshop 1(5)</td>
					</tr>
					<tr>
						<th rowspan="2" scope="row">3.00</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th rowspan="2" scope="row">4.00</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td rowspan="4">Introduction to Programmimg<br/>Lab 1(20)</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th rowspan="2" scope="row">5.00</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th rowspan="2" scope="row">6.00</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</tbody>
			</table>
		</section>
		<aside>        <!--  aside  -->
			<h3>Personal Profile</h3> <!--some personal details-->
			<blockquote>		<!--blockquote element have use and ul element have used inside it-->
				<ul>
					<li>Date of Birth: 18/02/2001</li>
					<li>Address: 3, Gerda grove, Cranbourne North.</li>
					<li>Nationality: Sri Lankan</li>
					<li>Mobile: 0468 424748</li>
					<li>Email address: adeepa@gmail.com</li>
					<li>Mother's name: Nilmini Liyanage</li>
					<li>Father's name: Palitha Hettiwaththage</li>
				</ul>
			</blockquote>
			<h3>Favourites</h3>
			<blockquote>
				<ul>
					<li>Favourite books:
					<ul>
						<li> The Great Gatsby by F.Scott Fitzgerald </li>
						<li> Moby Dick by Herman Melville </li>
						<li> Hamlet by William Shakespeare </li>
						<li> War and Peace b Leo Tolstoy </li>
						<li> The Adventurs of Huckleberry Finn by Mark Twain </li>
						<li> The Sound and the Fury by William Faulkner </li>
					</ul>
					</li>
					<li>Favourite films:
					<ul>
						<li> Avengers </li>
						<li> Harry potter </li>
						<li> The Lord of the Rings </li>
						<li> Star Wars </li>
						<li> Black Panther </li>
						<li> Incredibles </li>
					</ul>
					</li>
				</ul>
			</blockquote>
		</aside>
		<section id="animation"> <!--Enhancement- Animation -->
		<a href="mailto:102219581@student.swin.edu.au">&#160;Mail me by clicking here!</a> <!--Enhancement - Animation -->
		</section>
		<!--footer-->
		<?php
			include_once("footer.inc");
		?>
	</body>
</html>	
