<?php
	require_once 'connection.php';
?>
	<div class="templatemo-logo">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 black-bg logo-left-container">
			<h1 class="logo-left">Ma' Grade</h1>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg logo-right-container">
			<h1 class="logo-right">Baker's Shop</h1>
		</div>			
	</div>
	<div class="templatemo-container">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 black-bg left-container">			
			<div class="tm-left-inner-container">
	<?php
		if (isset($_SESSION['user'])) {
			$name = $_SESSION['user'];
			echo '<div id="welcome"><h3><small>Welcome ' . ucfirst($name) . '</small></h3></div>';
		}
	?>
				<ul class="nav nav-stacked templatemo-nav">
				  <li><a href="index.php"><i class="fa fa-home fa-medium"></i>Homepage</a></li>
				  <li><a href="products.php"><i class="fa fa-shopping-cart fa-medium"></i>Products</a></li>
				  <?php if (isset($_SESSION['user'])) {
				  	echo '<li><a href="logout.php"><i class="fa fa-sign-out fa-medium"></i>Log Out</a></li>';
					} else { 
				  	echo '<li><a href="login.php"><i class="fa fa-sign-in fa-medium"></i>Log In</a></li>';
				  	echo '<li><a href="signup.php"><i class="fa fa-database fa-medium"></i>Sign Up</a></li>';
					} ?>
				  <li><a href="rates.php"><i class="fa fa-comments-o fa-medium"></i>Rate Us</a></li>
				</ul>
			</div>
		</div>
