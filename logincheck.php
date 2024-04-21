<?php 

require_once("sql.php");

if (isset($_POST["votesubmit"])) {

	$vote = $_POST['Voteres'];
	$uname = trim($_POST['uname']);
	$pword = trim($_POST['pword']);	
	$clean_pword= mysqli_escape_string($conn, $pword);
	$clean_uname= mysqli_escape_string($conn, $uname);

	$sql = "SELECT * FROM users WHERE username = '$clean_uname' AND password = '$clean_pword' AND vote = 0;";
	$results = mysqli_query($conn, $sql);
	$num_rows = mysqli_num_rows($results);

	if(!($num_rows > 0)){
		die(header("Location: fail2.php"));
	} 
	$row = mysqli_fetch_assoc($results);

	$sql1 = "UPDATE users SET vote= 1 WHERE username= '$clean_uname';";
	$result = mysqli_query($conn, $sql1);
	
    $sql = "UPDATE restaurants SET vote = vote + 1 WHERE id = '$vote'";
    $result = mysqli_query($conn, $sql);
	header("Location: success2.php");
}
 ?>