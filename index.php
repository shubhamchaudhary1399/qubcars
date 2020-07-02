<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>QubCars</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<?php include 'includes/navbar.php'; ?>
	
	<div class="top-banner">
		<div class="f-overlay">
			<div class="banner">
				<div id="top_heading">
					<h1 id="top_title">Book a QubCar and reach your destination</h1>
					<label id="top_subtitle" class="hide-on-xs">
						Choose from a wide range of categories
					</label>
				</div>
			</div>

			<br>
			<div class="Qub-booking" style="display: none;">
				<div class="booking-tab">
					<span class="tab-button"><a href="#" class="links tab tab-active">City Taxi</a></span>
					<span class="tab-button"><a href="#" class="links tab">Outstation</a></span>
					<span class="tab-button"><a href="#" class="links tab">Fleet</a></span>		
				</div>
			</div>
		</div>	
	</div>

	
	<div class="service-info">
		<div class="section-heading">
			<h2 class="section-title">A QubCar for every occassion</h2>
			<label class="section-subtitle">QubCars offers city taxis, inter-city cabs, and local cabs at hourly packages</label>
		</div>
		<br>
		<div class="card-list-item">
			<div class="card-holder">
				<div class="indiv-card">
					<img class="card-image" src="img/card_image1.jpg">
					<div class="info-container">
						<h2 class="heading"><strong>city taxi</strong></h2>
						<p class="info">The perfect way to get through your everyday travel needs. City taxis are available 24/7 and you can book and travel in an instant. With rides starting from as low as Rs. 3/km, you can choose from a wide range of options! You can also opt to do your bit for the environment with Qub Share!</p>
					</div>
				</div>	
			</div>
			<div class="card-holder" id="card2">
				<div class="indiv-card">
					<img class="card-image" src="img/card_image2.jpg">
					<div class="info-container">
						<h2 class="heading"><strong>outstation</strong></h2>
						<p class="info">Ride out of town at affordable one-way and round-trip fares with Qub’s intercity travel service. Choose from a range of AC cabs driven by top partners, available in 1 hour or book upto 7 days in advance. We have you covered across India with presence in 90+ cities with over 500 routes.</p>
					</div>
				</div>
			</div>
			<div class="card-holder">
				<div class="indiv-card">
					<img class="card-image" src="img/card_image3.jpg">
					<div class="info-container">
						<h2 class="heading"><strong>fleet</strong></h2>							<p class="info">With Qub Fleet you get a cab at your doorstep. So be it a  day long business meeting, a shopping trip with your friends or just a day out in a new city, we have you covered. Packages start at 1 hour and can be extended upto 5 days.</p>
					</div>
				</div>	
			</div>
		</div>
	</div>


	<div class="container">
		<div class="container-heading">
			<div class="section-heading">
				<h2 class="section-title">Meet our Awesome Fleet</h2>
				<label class="section-subtitle">The widest variety of cars to choose from</label>
			</div>
		</div>
		<div class="slideshow">
			<div class="slideshow-container">
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
						<img class="slide-img" src="img/auto.png">
					</div>
					<div class="right-content">
						<div class="wd-40">
							<h4 class="heading">Auto</h4>
							<div class="sub-title">Get an Auto at your doorstep</div>
							<div class="info">The all too familiar auto ride, minus the hassle of waiting and haggling for price. A convenient way to travel everyday.</div>
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

	<script type="text/javascript" src="js/index.js"></script>
	<script type="text/javascript" src="js/navbar.js"></script>

</body>
</html>