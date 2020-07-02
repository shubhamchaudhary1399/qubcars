
    <div class="navbar">
		<div class="max-width">
			<img src="img/svg/menu.svg" class="hide-xs" onclick="burger()">
		
			<div class="navbar-brand">
				
				<img src="img/svg/car-solid.svg" class="filter-color" class="img-logo">
				<a href="index.php" class="links logo"><strong>QubCars</strong></a>
			</div>

		<?php
            if (isset($_SESSION['email'])) { ?>

            <div class="navbar-left">
				<a href="qubuser.php" class="links">Hello <?php echo $_SESSION['firstname']; ?></a>
			</div>

			<div class="navbar-right">
				<a href="fleet.php" class="links">Qub Fleet</a>
				<a href="settings.php" class="links">Settings</a>
				<a href="logout_script.php" class="links">Logout</a>
				<a href="booknow.php" class="login-link links">Book Now</a>	
			</div>
		</div>
	</div>

		<div class="sidebar-navbar" style="">
			<span class="cbtn" onclick="burger()">&times;</span>
			<ul class="nav_ul">
				<li><a href="qubuser.php" class="links nav-links">
						<img src="img/svg/account_circle.svg" class="material-icon">Hi <?php echo $_SESSION['firstname']; ?></a></li>
				<li><a href="booknow.php" class="links nav-links">
						<img src="img/svg/taxi.svg" class="material-icon">Book Now</a></li>
				<li><a href="fleet.php" class="links nav-links">
						<img src="img/svg/fleet.svg" class="material-icon">Qub Fleet</a></li>
				<li><a href="aboutus.php" class="links nav-links">
						<img src="img/svg/company.svg" class="material-icon">Our Company</a></li>
				<li><a href="settings.php" class="links nav-links">
						<img src="img/svg/settings.svg" class="material-icon">Settings</a></li>
				<li><a href="logout_script.php" class="links nav-links">
						<img src="img/svg/logout.svg" class="material-icon">Logout</a></li>
				
			</ul>
		</div>

		<!-- ------------------------------ -->
                

        <?php } else {  ?>

            <div class="navbar-left">
				<a href="login.php" class="links">Login</a>
				<a href="signUp.php" class="links">Signup</a>
			</div>

			<div class="navbar-right">
				<a href="fleet.php" class="links">Qub Fleet</a>
				<a href="drive.php" class="links">Qub Drive</a>
				<a href="aboutus.php" class="links">Our Company</a>
				<a class="login-link links" href="booknow.php">Book Now</a>
			</div>
		</div>
	</div>

		<div class="sidebar-navbar" style="">
			<span class="cbtn" onclick="burger()">&times;</span>
			<ul class="nav_ul">
				<li><a href="login.php" class="links nav-links">
						<img src="img/svg/login.svg" class="material-icon">Login</a></li>
				<li><a href="signUp.php" class="links nav-links">
						<img src="img/svg/account_circle.svg" class="material-icon">Signup</a></li>
				<li><a href="booknow.php" class="links nav-links">
						<img src="img/svg/taxi.svg" class="material-icon">Book Now</a></li>
				<li><a href="fleet.php" class="links nav-links">
						<img src="img/svg/fleet.svg" class="material-icon">Qub Fleet</a></li>
				<li><a href="drive.php" class="links nav-links">
						<img src="img/svg/direction.svg" class="material-icon">Qub Drive</a></li>
				<li><a href="aboutus.php" class="links nav-links">
						<img src="img/svg/company.svg" class="material-icon">Our Company</a></li>
				
			</ul>
		</div>
                        

            <?php  }  ?>
			

	<div id="clear"></div>


