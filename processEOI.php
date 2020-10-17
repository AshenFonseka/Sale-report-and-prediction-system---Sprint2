 <!DOCTYPE HTML>
 <html lang="en">
 <head>
	<meta charset="utf-8">
	<meta name="description" content="assignment3"/>
	<meta name="keywords" content="processEOI"/>
	<meta name="author" content="Adeepa Uwanpriya Hettiwaththage"/>
	<title>Process EOI</title>
	<link href= "styles/style.css" rel="stylesheet" />
	<script src="scripts/apply.js"></script>
 </head>
 <body>
	<?php	//header and menu
		include_once "header.inc";	
		include_once "menu.inc";
	?>
	<?php	//Validation 						
		if (!isset ($_POST["jobreferenceno"])){
			header( "lacation:apply.php" );
			exit();
		}
		
		$err_msg = "";
		
		$jobreferenceno = sanitise_input($_POST["jobreferenceno"]);												//Job Reference Number
		if ($jobreferenceno == "")
			$err_msg .= "<p>Error: Please Enter the JOB reference number.</p>";
		
		$firstname = sanitise_input($_POST["firstname"]);														//First Name					
		if ($firstname == "")
			$err_msg .= "<p>Error: Please Enter Your FIRST Name.</p>";
		else if (!preg_match("/^[a-zA-Z]{0,20}$/", $firstname))
			$err_msg .= "<p>Error: Your FIRST NAME must contain MAXIMUM 20 ALPHA CHARACTERS.</p>";
		
		$lastname = sanitise_input($_POST["lastname"]);															//Last Name
		if ($lastname == "")
			$err_msg .= "<p>Error: Please Enter Your LAST Name.</p>";
		else if (!preg_match("/^[a-zA-Z]{0,20}$/", $lastname))
			$err_msg .= "<p>Error: Your LAST NAME must contain MAXIMUM 20 ALPHA CHARACTERS.</p>";
		
		$dob = sanitise_input($_POST["dob"]);																	//Date of Birth
		if (!preg_match("/^\d{2}\/\d{2}\/\d{4}$/", $dob)){
			$err_msg .= "<p>Error: Please Enter Your DATE OF BIRTH in correct FORMATE, DD/MM/YYYY.</p>";
		}
		else{
			$dob = explode("/", $dob);
			$dob = $dob[2] . "-" . $dob[1] . "-" . $dob[0];
			
			$dmy = date_create($dob);
			$dofb = date_create();
			$age = date_diff($dmy, $dofb);
			$age = date_interval_format($age, "%Y");
			
			if ($age < 15 || $age > 80)
				$err_msg .= "<p>Error: You AGE must be Between 15 and 80.</p>";
		}
		
		if (isset($_POST["gend"]))																				//Gender - Radio Button
			$gend = $_POST["gend"];
		else
			$err_msg .= "<p>Error: Please select Your Gender.</p>";
		
		$streetaddress = sanitise_input($_POST["streetaddress"]);												//Street Address
		$streetaddresslength = strlen($streetaddress);
		if ($streetaddress == "")
			$err_msg .= "<p>Error: Please Enter Your STREET ADDRESS.</p>";
		else if ($streetaddresslength > 40)
			$err_msg .= "<p>Error: Your STREET ADDRESS must contain MAXIMUM 40 ALPHA CHARACTERS.</p>";
		
		$subtow = sanitise_input($_POST["subtow"]);																//Suburb/Town
		$subtowlength = strlen($subtow);
		if ($subtow == "") 
			$err_msg .= "<p>Error: Please Enter Your SUBURB/TOWN.</p>";
		else if ($subtowlength > 40)
			$err_msg .= "<p>Error: Your SUBURB/TOWN must contain MAXIMUM 40 ALPHA CHARACTERS.</p>";
		 
		if (isset($_POST["state"]) && ($_POST["state"] != ""))													//State
			$state = $_POST["state"];
		else
			$err_msg .= "<p>Error: Please Select Your STATE.</p>";
		
		$postcode = sanitise_input($_POST["postcode"]);
		$postcodelength = strlen($postcode);
		if ($postcode == ""){
		$err_msg .= "<p>Error: Please Enter Your POSTCODE.</p>";}
		else if ($postcodelength != 4){
		$err_msg .= "<p>Error: Please Enter a VALID POSTCODE.</p>";}
		else if (!preg_match("/^[0-9]{4}$/", $postcode)){
			$err_msg .= "<p>Error: Please Enter a VALID POSTCODE.</p>";
		}
		else if(isset($state)){
			$first = substr($postcode, 0, 1);
				switch($state){
					case "vic":
					if(!($first==3||$first==8)){
						$err_msg .= "<p>Error: Your Postcode must COMPATIBLE with Your State.</p>";
					}
					break;
				case "nsw":
					if(!($first==1||$first==2)){
						$err_msg .= "<p>Error: Your Postcode must COMPATIBLE with Your State.</p>";
					}
					break;
				case "qld":
					if(!($first==4||$first==9)){
						$err_msg .= "<p>Error: Your Postcode must COMPATIBLE with Your State.</p>";
					}
					break;
				case "nt":
					if(!($first==0)){
						$err_msg .= "<p>Error: Your Postcode must COMPATIBLE with Your State.</p>";
					}
					break;
				case "wa":
					if(!($first==6)){
						$err_msg .= "<p>Error: Your Postcode must COMPATIBLE with Your State.</p>";
					}
					break;
				case "sa":
					if(!($first==5)){
						$err_msg .= "<p>Error: Your Postcode must COMPATIBLE with Your State.</p>";
					}
					break;
				case "tas":
					if(!($first==7)){
						$err_msg .= "<p>Error: Your Postcode must COMPATIBLE with Your State.</p>";
					}
					break;
				case "act":
					if(!($first==0)){
						$err_msg .= "<p>Error: Your Postcode must COMPATIBLE with Your State.</p>";
					}  
					break;
				}
			
		}
		
		$email = sanitise_input($_POST["email"]);																//Email
		if ($email == "")
			$err_msg .= "<p>Error: Please Enter Your EMAIL ADDRESS.</p>";
		else if (!preg_match("/^[^@\\s]+@[^@\\s]+\\.[^@\\s]+$/", $email))
			$err_msg .= "<p>Error: Please Enter a VALID EMAIL. Formate: example@gmail.com .</p>";
		
		$phoneno = sanitise_input($_POST["phoneno"]);															//Phone Number
		if ($phoneno == "")
			$err_msg .= "<p>Error: Please Enter Your PHONE NUMBER.</p>";
		else if (!preg_match("/^[0-9 ]{8,12}$/", $phoneno))	
			$err_msg .= "<p>Error: Please use Correct FORMATE to Write Your PHONE NUMBER.</p>";
			 
		if (isset($_POST["skills"]))																			//Skills -Checkbox
			$skills = $_POST["skills"];
		else
			$err_msg .= "<p>Error: Please Select Your SKILLS.</p>";
		
		$otherskillstb = sanitise_input($_POST["otherskillstb"]);												//Other skills-Text area
		$length = count($skills);
		if (isset($skills)){ 
			for ($i = 0; $i < $length; $i++){
				if($skills[$i]=="otherskillstb"){
					if (isset($_POST["otherskillstb"])&& $_POST["otherskillstb"] != ""){
						$otherskillstb = sanitise_input($_POST["otherskillstb"]);
					}else{
						$err_msg .= "<p>Error: Please Write Your OTHER SKILLS.</p>";
					}
				}
			}
		}
		
		function sanitise_input($data) {																		//sanitise the values
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
			
			
		if ($err_msg!=""){																						//error message
			echo"$err_msg";
		}else{		
		
		require_once("settings.php");
		$conn = mysqli_connect($host,$user,$pwd,$sql_db);
		
		if ($conn) { 																							//create db
			$query = "CREATE TABLE IF NOT EXISTS eoi ( EOInumber INT not null AUTO_INCREMENT PRIMARY KEY, 		
			jobreferenceno CHAR(12) not null,
			firstname VARCHAR(20) not null,
			lastname VARCHAR(20) not null, 
			gend VARCHAR(6) not null, 
			dob DATE not null , 
			streetaddress VARCHAR(40) not null, 
			subtow VARCHAR(40) not null, 
			state VARCHAR(6) not null, 
			postcode CHAR(8) not null, 
			email VARCHAR(50) not null, 
			phoneno CHAR(12) not null, 
			skills VARCHAR(500) not null, 
			otherskillstb VARCHAR(150), 
			status VARCHAR(20)
			);"; 

			$result = mysqli_query($conn, $query);
			
			if ($result) {
																													
				$query = "INSERT INTO eoi (jobreferenceno, firstname, lastname, gend, dob, streetaddress, subtow, state, postcode, email, phoneno, skills, otherskillstb, status) 
						VALUES ('$jobreferenceno', '$firstname','$lastname', '$gend', '$dob','$streetaddress','$subtow','$state','$postcode','$email','$phoneno' ,'" . implode(',', $skills) . "','$otherskillstb', 'NEW');";

				$insert_result = mysqli_query ($conn, $query);

				if ($insert_result) {			
					echo "<p>Insert  successful. Your application number is " . mysqli_insert_id($conn) . ".</p>";
				} else {
					echo "<p>Insert  unsuccessful.</p>";
				}
				
			} else {
				echo "<p>Create table operation unsuccessful.</p>";
			}
			mysqli_close($conn);					
		} else {
			echo "<p>Unable to connect to the database.</p>";
		}
		}		
	?>
	
	<table>					
	<tr>
		<th><button onclick="location.href='apply.php';">Back To Application</button></th>							<!--Buttons-->
		<th><button onclick="location.href='manage.php';">Manage</button></th>
	</tr>		
	</table>
	
	<?php
		include_once("footer.inc"); 
		
	?>
	
</body>
</html>