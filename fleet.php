<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fleet | Hire Local Cabs Online at Lowest Prices | Car Rental Service at OubCars.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/fleet.css">
</head>
<body>
	<?php include 'includes/navbar.php'; ?>

	<div class="fleet-banner">
		<div class="f-overlay"></div>
		<div class="text-overlay"></div>
		<div class="banner-content">
			<h1>Meet our fleet</h1>
			<label>How do we get you around ?</label>
		</div>
	</div>

	<div class="fleet-tab-container">
		<div class="fleet-tab">
			<a class="f-tab f-tab-active" onclick="fleetChange(1);">City Taxi</a>
			<a class="f-tab " onclick="fleetChange(2);">Outstation</a>
			<a class="f-tab " onclick="fleetChange(3);">Rentals</a>
		</div>

		<div class="fleet-content">
			<div id="city-taxi" class="fleet-options change">
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/bike-active.svg">
					</div>
					<label>Bike</label>
				</div>
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/share-active.svg">
					</div>
					<label>Share</label>
				</div>
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/micro-active.svg">
					</div>
					<label>Micro</label>
				</div>
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/mini-active.svg">
					</div>
					<label>Mini</label>
				</div>
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/prime-sedan-active.svg">
					</div>
					<label>Prime Sedan</label>
				</div>
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/prime-suv-active.svg">
					</div>
					<label>Prime SUV</label>
				</div>	
			</div>

			<div id="outstation" class="fleet-options">
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/mini-active.svg">
					</div>
					<label>Mini</label>
				</div>
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/prime-sedan-active.svg">
					</div>
					<label>Prime Sedan</label>
				</div>
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/prime-play-active.svg">
					</div>
					<label>Prime Play</label>
				</div>
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/prime-suv-active.svg">
					</div>
					<label>Prime SUV</label>
				</div>
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/lux-active.svg">
					</div>
					<label>LUX</label>
				</div>
			</div>
			<div id="rentals" class="fleet-options">
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/prime-sedan-active.svg">
					</div>
					<label>Prime Sedan</label>
				</div>
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/prime-play-active.svg">
					</div>
					<label>Prime Play</label>
				</div>
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/prime-suv-active.svg">
					</div>
					<label>Prime SUV</label>
				</div>
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/lux-active.svg">
					</div>
					<label>Prime LUX</label>
				</div>
				<div class="indiv-fleet">
					<div class="img-fleet">
						<img src="img/svg/kaali-peeli-active.svg">
					</div>
					<label>Kaali Peeli</label>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="slideshow">
			<div class="slideshow-container">
				<div class="slide fade">
					<div class="left-content">
						<img class="slide-img" src="img/micro.png">
					</div>
					<div class="right-content">
						<div class="wd-40">
							<h4 class="heading">Micro</h4>
							<div class="sub-title">Small fares for short rides</div>
							<div class="info">Compact yet comfortable AC cars that seat up to 3 people and give you great value for your money. Small fares for short rides.</div>
						</div>
					</div>
				</div>
				<div class="slide fade">
					<div class="left-content">
						<img class="slide-img" src="img/share.png">
					</div>
					<div class="right-content">
						<div class="wd-40">
							<h4 class="heading">Share</h4>
							<div class="sub-title">Eco-friendly rides at pocket-friendly rates</div>
							<div class="info">Fully air conditioned cars that you can share with others depending on your route and location.</div>
						</div>
					</div>
				</div>
				<div class="slide fade">
					<div class="left-content">
						<img class="slide-img" src="img/prime-sedan.png">
					</div>
					<div class="right-content">
						<div class="wd-40">
							<h4 class="heading">Prime Sedan</h4>
							<div class="sub-title">Sedans with free Wi-Fi and top drivers</div>
							<div class="info"> Top rated drivers, and a hand-picked fleet of the best cars with extra legroom and boot space</div>
						</div>
					</div>
				</div>
				<div class="slide fade">
					<div class="left-content">
						<img class="slide-img" src="img/lux.png">
					</div>
					<div class="right-content">
						<div class="wd-40">
							<h4 class="heading">Lux</h4>
							<div class="sub-title">The new luxury ride in town</div>
							<div class="info">Top-of-the-line luxury cars like Mercedes, BMW, and Audis powered by auto-connect Wi-Fi, at unbeatable fares & attractive hourly rental packages.</div>
						</div>
					</div>
				</div>

			<button class="prev-btn" onclick="plusSlides(-1)"></button>
			<button class="next-btn" onclick="plusSlides(1)"></button>
			</div>
		
		</div>
	</div>


	<div class="qub-features">
		<div class="features">
			<div class="indiv-feature">
				<img src="img/svg/qub-support.svg">
				<div class="feature-content">
					<h2 class="heading">24/7 Customer Support</h2>
					<p class="info" style="margin: 0;text-align: justify;">
                        A dedicated 24x7 customer support team always at your service to help solve any problem
                    </p>
				</div>
			</div>
			<div class="indiv-feature">
				<img src="img/svg/sos.svg">
				<div class="feature-content">
					<h2 class="heading">Your Safety First</h2>
					<p class="info" style="margin: 0;text-align: justify;">
                       Keep your loved ones informed about your travel routes or call emergency services when in need
                    </p>
				</div>
			</div>
			<div class="indiv-feature">
				<img src="img/svg/best-driver.svg">
				<div class="feature-content">
					<h2 class="heading">Top Rated Driver-Partners</h2>
					<p class="info" style="margin: 0;text-align: justify;">
                        All our driver-partners are background verified and trained to deliver only the best experience
                    </p>
				</div>
			</div>
		</div>
	</div>



	<?php include 'includes/footer.php'; ?>

	<script type="text/javascript" src="js/navbar.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<script type="text/javascript" src="js/fleet.js"></script>
</body>
</html>