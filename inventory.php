<?php
	include 'inc/header.php';

?>
			<h2 class="text-center header">Insert paper inventory record</h2>
			<br /><br />
			<form method="get" action="inventory.php" class="formAlt form-inline">
			<div class="form-group">
				<label>Item Name</label>
				<br>
				<select name="item_name" class="form-control">
					<option value="8.5 x 11 lef">8.5 x 11 lef</option>
					<option value="11 x 17 lef">11 x 17 lef</option>
					<option value="11 x 17 blue">11 x 17 blue</option>
					<option value ="11 x 17 sef">11 x 17 sef</option>
					<option value= "11 x 17 hvy">11 x 17 hvy</option>
					<option value="12 x 18 lef">12 x 18 lef</option>
					<option value="12 x 18 sef">12 x 18 sef</option>
					<option value="12 x 18 hvy">12 x 18 hvy</option>
					<option value="12 x 18 card">12 x 18 card</option>
					<option value="12 x 19 smt">12 x 19 smt</option>
				</select>	
				<br>
				<label>Quantity (x 1000)</label>
				<br>
				<select name ="qty" class="form-control">
					<?php
					$i = 1;
					while($i < 100){
						echo "<option>" . $i . "x1000" . "</option>";
						echo "<br>";
						$i++;
					}
					?>	
				</select>	
				<br><br />
				<input type="submit" value="insert record" class="btn btn-danger btn-sm form-control">
				<br>
			</div>

			</form>	
		<?php
			include 'inc/footer.php';
		?>	