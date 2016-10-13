
<?php
include 'inc/header.php';
?>
<a href="index.php" class="btn btn-primary">Home</a>
<div class="jumbotron" id="filter">
		<!--Filter panel-->
		<!--Ajax to keep this shit refreshed-->
		<form>
			<select>
			<!--Name of item-->
			</select>	

			<select>
			<!--Out of stock shit-->	
			</select>	

			<input type="search">
			<input type="submit" value="Look it up">
		</form>	
	</div>	



<?php
include 'inc/connect.inc.php';
//this is one of those blocks that just looks fake af
$sql = "SELECT * FROM inventory";
$result=$tcon->query($sql);
if($result->num_rows > 0){
	while($rows = mysqli_fetch_assoc($result)){
		echo "<table>";
			echo "<tr>";
				echo "<td>";
					echo "<pre>";
						print_r($rows);
					echo "</pre>";	
				echo "</td>";	
			echo "</tr>";
		echo "<table>";
	}	
}
?>
	