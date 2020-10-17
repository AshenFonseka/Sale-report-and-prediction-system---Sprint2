<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
	<meta name="description" content="assignment3"/>
	<meta name="keywords" content="delete.php"/>
	<meta name="author" content="Adeepa Uwanpriya Hettiwaththage"/>
	<title>Delete Page</title>
	<link href= "styles/style.css" rel="stylesheet" />
	<script src="scripts/apply.js"></script>
</head>
<body>

<?php
	include_once "header.inc";											// Header
?>

<?php
	if (isset ($_GET["EOInumber"]))
		$EOInumber = $_GET["EOInumber"];
	else {
		header ("location:manage.php");
		exit();
	}
	
	require_once "settings.php";										// Using settings.php
	$conn = @mysqli_connect ($host,$user,$pwd,$sql_db);					// Log in to the database and use the data 
	if ($conn) { 														
		$query = "DELETE FROM eoi WHERE EOInumber = $EOInumber";
		$result = mysqli_query ($conn, $query);
		if ($result) {													// Query is successful or not.
			echo "<p>That Record Deleted.</p>";
		} else {
			echo "<p>Error: Records not Delected and Try Again.</p>";
		}
		mysqli_close ($conn);											// Close db
	} else {
		echo "<p>Error: Unable to CONNECT to the DATABASE and Please Try Again.</p>";
    }
    
?>	
	<p><button onclick="location.href='manage.php';">Back</button></p>
<?php
	include_once("footer.inc");											// Footer
?>

</body>
</html>