<?php 

require_once("sql.php");

$sql = "SELECT id, username FROM users";
$results = mysqli_query($conn, $sql);

if (isset($_POST['submit']))
{
	if (!empty($_POST['firstname'])) {
	$fname = trim($_POST['firstname']);	
	}
	if (!empty($_POST['lastname'])) {
	$lname = trim($_POST['lastname']);
	}
	if ((!empty($_POST['email'])) AND (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))){
	$email = trim($_POST['email']);	
	} else {
		echo "invalid email format";
	}
	if (!empty($_POST['password'])) {
	$pword = trim($_POST['password']);	
	}
	if (!empty($_POST['username'])) {
	$uname = trim($_POST['username']);	
	}

	$clean_fname= mysqli_escape_string($conn, $fname);
	$clean_lname= mysqli_escape_string($conn, $lname);
	$clean_email= mysqli_escape_string($conn, $email);
	$clean_pword= mysqli_escape_string($conn, $pword);
	$clean_uname= mysqli_escape_string($conn, $uname);

	$sql = "SELECT * FROM users WHERE email = '$clean_email' AND password = '$clean_pword'";
	$result = mysqli_query($conn, $sql);
	$num_rows = mysqli_num_rows($result);

	if($num_rows > 0){
		$row = mysqli_fetch_assoc($result);
			header('Location: fail.php');
	} else {

		$sql = "INSERT INTO users (firstname, lastname, email, password, username)
				VALUES ('$clean_fname', '$clean_lname', '$clean_email', '$clean_pword','$clean_uname')";

		if (mysqli_query($conn,  $sql)) {
			header('Location: success.php');
		} else {
			echo "error: " . mysqli_error($conn);
		}
		mysqli_close($conn);
		}
	}
 ?>