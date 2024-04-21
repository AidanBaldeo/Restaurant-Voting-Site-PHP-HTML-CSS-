<?php 
$servername = "localhost";
$username = "root";
$password = "1234door";
$db = "myDB";

$conn = mysqli_connect($servername,  $username, $password, $db);

if (!$conn) {
	die("Connection Failed" . mysqli_connect_error());
}
?>