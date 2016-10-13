<?php
error_reporting(0);
ini_set('error_reporting', null);
session_start(true);
?>
<!DOCTYPE html>
<html>
		<head>
			<?php
				include 'header.php';
			?>

			<style>
				form{
					border: 1px solid black;
					margin-left:25% !important;
				}
			</style>
		</head>
		
		<body class="container-fluid">
	<form method="post" action="inc/signin.inc.php" class="form formAlt">
		<input type="text" name="user">
		<br>
		<input type="password" name="pass">
		<br>
		<input type="submit" value="Log in">

	</form>	
	<script>
		alert(<?php
				echo "testing";
			?>)
	</script>
<?php
include 'footer.php';	
?>
