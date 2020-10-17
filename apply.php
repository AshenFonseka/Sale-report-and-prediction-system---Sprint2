<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="assignment1, assignment2, assignment3"/>
		<meta name="keywords" content="job application, form"/>
		<meta name="author" content="Adeepa Uwanpriya Hettiwaththage"/>
		<title>Job Application page</title>
		<link href= "styles/style.css" rel="stylesheet" />
		<script src="scripts/apply.js"></script>
		
	</head>
	<body id="applypage">
	
		<?php
			include_once("header.inc"); //Header is in a include file
			include_once("menu.inc");	//Menu is in a include file
		?>
		
		<h1 id="job">Job Application</h1>
		
		<form method="post" action="processEOI.php" id="appform" novalidate="novalidate"> <!--Action is to the processEOI.php -->
		<div id="time"></div>  
			<p><label for="jobreferenceno">Job refernce number</label> 
				<input name= "jobreferenceno" id="jobreferenceno" readonly/>
			</p>
			<p><label for="firstname">First Name</label>
				<input type="text" name="firstname" id="firstname" maxlength="21" required="required" pattern="^[a-zA-Z]{0,20}$"/>
			</p>
			<p><label for ="lastname">Last Name</label>
				<input type="text" name="lastname" id="lastname" required="required" maxlength="21" pattern="^[a-zA-Z]{0,20}$"/>
			</p>
			<p> <label for="dob">Date of Birth
				<input type="text" id="dob" name="dob" size="10" placeholder="dd/mm/yyyy" pattern="\d{1,2}\/\d{1,2}\/\d{4}" required="required" /> <!-- type="date" name= "dob" id="dob" required="required"/> --> 
				</label>
			</p> 
			<fieldset>
				<legend>Gender</legend>  <!--radio buttons-->
				<label for="male"> Male </label>
				<input type="radio" id="male" name="gend" value="Male" checked="checked"/><br/>
				<label for="female"> Female </label> 
				<input type="radio" id="female" name="gend" value="Female"/><br/>
			</fieldset>
			<p><label for="streetaddress">Street Address</label>
				<input type="text" name="streetaddress" id="streetaddress" required="required" maxlength="41">
			</p>
			<p><label for="subtow">Suburb/town</label>
				<input type="text" name="subtow" id="subtow" required="required" maxlength="41">
			</p>
			<p><label for="state">State  <!--dropdown-->
				<select name="state" id="state" required="required" >
				<option value="">Please Select</option>
				<option value="vic" id="vic" >VIC</option>			
				<option value="nsw" id="nsw">NSW</option>
				<option value="qld" id="qld">QLD</option>
				<option value="nt" id="nt">NT</option>
				<option value="wa" id="wa">WA</option>
				<option value="sa" id="sa">SA</option>
				<option value="tas" id="tas">TAS</option>
				<option value="act" id="act">ACT</option>
				</select >
			</label>
			</p> 
			<p><label>Postcode</label> 
				<input type="text" name= "postcode" id="postcode" required="required" pattern="[0-9]{4}"/>
			</p>
			<p><label for="email">Email address</label> 
				<input type="email" name= "email" id="email" placeholder="name@domain.com" required="required"/> <!--type="text" id="email" name="name" placeholder="name@domain.com" pattern="^.+@.+\..{2,3}$" required="required"-->
			</p>
			<p><label for="phoneno">Phone number</label> 
				<input type="text" name= "phoneno" id="phoneno" required="required" pattern="[0-9 ]{8,12}"/>
			</p>
			<p id="storage"> Skill list <br/>				<!--checkboxs-->
				<label for="positive">Positive attitude</label> 
				<input type="checkbox" id="positive" name="skills[]" value="Positive attitude" checked="checked"/>
				<label for="communication">Communication</label> 
				<input type="checkbox" id="communication" name="skills[]" value="communication"/>
				<label for="teamwork">Teamwork</label> 
				<input type="checkbox" id="teamwork" name="skills[]" value="Teamwork" checked="checked"/>
				<label for="thinking">Thinking Skills</label> 
				<input type="checkbox" id="thinking" name="skills[]" value="Thinking Skills"/>
				<label for="planing">Planning and Organisation</label> 
				<input type="checkbox" id="planing" name="skills[]" value="Planning and Organisation"/>
				<label for="other">Other Skills...</label> 
				<input type="checkbox" id="other" name="skills[]" value="otherskillstb"/>
			</p>
			<p><label for="otherskillstb">Other Skills<br/>
				<textarea id="otherskillstb" name="otherskillstb" rows="4" cols="40"  placeholder="Write your other skills here..."></textarea></label>
			</p>
			
			<input type= "submit" value="Apply"/>
			<input type= "reset" value="Reset form"/>
			<p><span id="display"></span> </p>

		</form>
		<!--footer-->
		<?php
			include_once("footer.inc"); //Footer is in a include file
		?>
	</body>
	</html>