<?php
session_start(true);
include 'connect.inc.php';

$un = trim($_POST['user']);

$pw = trim($_POST['pass']);

$_SESSION['active'] = false;

$sql = "SELECT * FROM users WHERE user_name = '$un' AND pass_word = '$pw'";

$result = $conn->query($sql);
if(!$row = $result->fetch_assoc()){

	echo "Your Username or Password is incorrect!";
	
}else{
//this shit is cool	
	$_SESSION['id'] = $row['id'];

	$_SESSION['user'] = $row['first_name'];

	$_SESSION['active'] = true;

	header("Location: ../index.php");
	
}
?>
