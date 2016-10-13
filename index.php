<?php
	include 'inc/header.php';
	if($_SESSION['active'] != true){
		header('Location: signin.php');
	}
?>
	
			<?php
				echo "Welcome " . $_SESSION['user'] . " " . $_SESSION['id'];

			?>
			<div class="jumbotron jumbAlt">
			<div class="row wrapper">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<img src="img/eriksenLogo.jpg" class="img-responsive imgLogo img-rounded">
				</div>	

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
						<h3>Control Panel</h3>
						<br>
						<p>Administrative workforce</p>
				</div>		
			</div>	
		
				<br><hr>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>Stock</label>
					<a href="supplyTable.php">	<img src="img/stockIcon.png" class="img-responsive img-circle imgAlt"></a>
					</div>	

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>Order Supplies</label>
						<a href="orderForm.php"><img src="img/insertIcon.jpg" class="img-responsive img-circle imgAlt">	</a>
					</div>	
						
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>Insert Supplies  (admin only)</label>
					<a href="inventory.php">	<img src="img/orderIcon.jpg" class="img-responsive img-circle imgAlt">	</a>
					</div>	
				</div>
				<hr>
				<div class="row">
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>Library</label>
					<a href="#">	<img src="img/libraryIcon.png" class="img-responsive img-circle imgAlt"></a>	
					</div>	

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>email</label>
					<a href="http://mbox.eriksenchiropractic.com/">	<img src="img/emailIcon.png" class="img-responsive img-circle imgAlt"></a>
					</div>	

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>Chat</label>
					<a href="chatAPI.php">	<img src="img/chatIcon.png" class="img-responsive img-circle imgAlt"></a>
					</div>	

				</div>
				<hr>
				<div class="row">
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<label>ADP EZ labor</label>
					<a href="https://ezlmappdc1f.adp.com/ezLaborManagerNet/UI4/EmployeeHome.aspx?sid=_slt_67afcf0b245cf6ed36ef6f9ab75e5588&bcl=1">	<img src="img/adpIcon.jpg" class="img-responsive img-circle imgAlt"></a>
					</div>	
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<label>Admin DataBase</label>
					<a href="#">	<img src="img/adminIcon.png" class="img-responsive img-circle imgAlt"></a>
					</div>	
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>SignOut</label>
					<a href="inc/signout.inc.php">	<img src="img/signoutIcon.jpg" class="img-responsive img-circle imgAlt"></a>
					</div>
				</div>	
			</div>	
		</body>
	</html>		