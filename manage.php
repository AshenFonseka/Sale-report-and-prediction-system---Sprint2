<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="assignment3"/>
	<meta name="keywords" content="Manager.php"/>
	<meta name="author" content="Adeepa Uwanpriya Hettiwaththage"/>
	<title>Manage Page</title>
	<link href= "styles/style.css" rel="stylesheet" />
	<script src="scripts/apply.js"></script>
</head>
<body>
	<?php	
		include_once("header.inc");
		include_once("menu.inc");
		session_start();
		if(isset($_SESSION['log'])) //For Enhancement
		{
	?>
	
	<h1> EOI Table</h1>
	<?php
		if (!isset($_POST["firstname"])&&!isset($_POST["lastname"])&&!isset($_POST["jobreferenceno"]))
			$query = "SELECT * FROM eoi;";	
		else {
			$firstname = trim($_POST["firstname"]);
			$lastname = trim($_POST["lastname"]);
			$jobreferenceno = trim($_POST["jobreferenceno"]);
			$query = "SELECT * FROM eoi WHERE firstname LIKE '%$firstname%' and lastname LIKE '%$lastname%' and jobreferenceno LIKE '%$jobreferenceno%'";
		}
	 
		require_once "settings.php";																	// Using settings.php
		$conn = mysqli_connect ($host,$user,$pwd,$sql_db);												// Log in to the database and use the data
		if ($conn) {																					
 
			$output = mysqli_query ($conn, $query);
		
			if ($output) {																				// Query is successful or not.
				
				$rrecord = mysqli_fetch_assoc ($output);
				if ($rrecord) {																			// checking Records.
				
					echo "<table>";																		//Eoi table
					echo "<tr><th>EOInumber</th><th>Job Reference</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>DOB</th><th>Street Address</th><th>Suburb/Town</th><th>State</th><th>Postcode</th><th>Email</th><th>Phone Number</th><th>Skills</th><th>Other Skills</th><th>Status</th><th></th></tr>";
					while ($rrecord) {
						echo "<tr><td>{$rrecord['EOInumber']}</td>";
						echo "<td>{$rrecord['jobreferenceno']}</td>";
						echo "<td>{$rrecord['firstname']}</td>";
						echo "<td>{$rrecord['lastname']}</td>";
						echo "<td>{$rrecord['gend']}</td>";
						echo "<td>{$rrecord['dob']}</td>";
						echo "<td>{$rrecord['streetaddress']}</td>";
						echo "<td>{$rrecord['subtow']}</td>";
						echo "<td>{$rrecord['state']}</td>";
						echo "<td>{$rrecord['postcode']}</td>";
						echo "<td>{$rrecord['email']}</td>";
						echo "<td>{$rrecord['phoneno']}</td>";
						echo "<td>{$rrecord['skills']}</td>";
						echo "<td>{$rrecord['otherskillstb']}</td>";  
						echo "<td>{$rrecord['status']}</td>";											//Status
						echo "<td><a href='delete.php?EOInumber=" . $rrecord['EOInumber'] 				//Delete option in table
									. "'>Delete</a></td></tr>";
						$rrecord = mysqli_fetch_assoc($output);
					}
					echo "</table>"; 
					mysqli_free_result ($output);														// Free up
				} else {
					echo "<p>Sorry! No records retrieved.</p>";
				}
			} else {
				echo "<p>Error: There is NO such Database or Something went Wrong. Please TRy Again.</p>";
			}
			mysqli_close ($conn);																		// Close db
		} else {
			echo "<p>Sorry! Unable to connect to the database.</p>";
		}	
	?>	
	
	<h2>Search EOI Table and List those as you wish!</h2>												<!--Search database-->
		<form action="manage.php" method="post">
			<p><label>First Name: <input type="text" name="firstname" /></label></p>    
			<p><label>Last Name: <input type="text" name="lastname" /></label></p> 
			<p><label>Reference Number: <input type="text" name="jobreferenceno" /></label></p>   
			<button onclick="location.href='manage.php';">Back</button>
			<input type="submit" value="Search" />
		</form>
	
	<h2>Delete Records by using Job Referencerence Number:	</h2>										<!--Delete Database using Reference Number-->	
		<form action="jobrefdelete.php" method="post">
			<p><label>Job Ref: <input type="text" name="jobreferenceno" /></label></p>  
			<input type="submit" value="Delete" />
		</form>
	
		<table>					
		<tr>
			<th><button onclick="location.href='apply.php';">Add Records</button></th>					<!--Add Records button-->
			<th><button onclick="location.href='log.php';">LOG-OUT</button></th>						<!--For Enhancement-->
		</tr>		
		</table>
	
	<?php
		}else{
		echo"<p>Error: Please ENTER the CORRECT details to LOG-IN</p>";									//For Enhancement
	?>
	
	<p><button onclick="location.href='log.php';">LOG-IN TO Manage</button>								<!--For Enhancement-->
	
	<?php
		include_once("footer.inc");
		}
	?>
	
</body>
</html>