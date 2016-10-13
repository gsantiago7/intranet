<?php
session_start(true);
include 'inc/header.php';

?>
	<form method="post" action="inc/signin.inc.php">

		<input type="text" name="user" placeholder="User Name">
		<br>
		<input type="password" name="pass" placeholder="Password">
		<br>
		<input type="submit" value="Log in">

	</form>	

<?php
include 'inc/footer.php';	
?>
