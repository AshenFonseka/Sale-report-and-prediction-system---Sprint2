<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
	<meta name="description" content="assignment3"/>
	<meta name="keywords" content="jobrefdelete.php"/>
	<meta name="author" content="Adeepa Uwanpriya Hettiwaththage"/>
	<title>Delete JOB Page</title>
	<link href= "styles/style.css" rel="stylesheet" />
	<script src="scripts/apply.js"></script>
</head>
<body>
<?php
	include_once "header.inc";																	//header
?>

<?php
	if (isset ($_POST["jobreferenceno"]))
		$jobreferenceno=$_POST["jobreferenceno"];
	else {
		header ("location:manage.php");
		exit();
	}
	require_once "settings.php";																// settings.php
	$conn = @mysqli_connect ($host,$user,$pwd,$sql_db);											
	if ($conn) { 																				
		$query = "DELETE FROM eoi WHERE jobreferenceno = '$jobreferenceno'";
		 
		$result = mysqli_query ($conn, $query);
		if ($result) {																			
			echo "<p> All Records deleted. There were " . mysqli_affected_rows($conn) . " records . </p>";
		} else {
			echo "<p>Error: Records not Delected and Try Again.</p>";
		}
		mysqli_close ($conn);																	
	} else {
		echo "<p>Error: Unable to CONNECT to the DATABASE and Please Try Again.</p>";
	}
?>	

	<button onclick="location.href='manage.php';">Back</button>

<?php
	include_once("footer.inc");															 		//footer
?>

</body>
</html>