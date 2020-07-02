<?php
  require("includes/common.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>QubCars | Drive with QubCar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/drive.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
	<?php include 'includes/navbar.php'; ?>
	
	<div class="main-slider">
		<div class="display-container hide-slides">
			<img src="img/entertainment.jpg">
			<div class="img-overlay">	</div>
			<div class="img-heading">
				<h1 class="img-title">Entertainment on the go</h1>
				<label class="img-subtitle">
					In-built music and infotainment to make every ride fun
				</label>
			</div>
		</div>
		<div class="display-container hide-slides">
			<img src="img/package.jpg">
			<div class="img-overlay">	</div>
			<div class="img-heading">
				<h1 class="img-title">Create your own package</h1>
				<label class="img-subtitle">
					Get personalized packages based on your travel duration and distance
				</label>
			</div>
		</div>
		<div class="display-container hide-slides">
			<img src="img/top-quality.jpg">
			<div class="img-overlay">	</div>
			<div class="img-heading">
				<h1 class="img-title">Top-Quality cars</h1>
				<label class="img-subtitle">
					With 104 quality checks, our cars are always as good as new
				</label>
			</div>
		</div>
		<div class="display-container hide-slides">
			<img src="img/built-in.jpg">
			<div class="img-overlay">	</div>
			<div class="img-heading">
				<h1 class="img-title">Built-in navigation</h1>
				<label class="img-subtitle">
					Always stay on track with state-of-the-art navigation at your fingertips
				</label>
			</div>
		</div>
	</div>

	<div class="service-info">
		<div class="section-heading">
			<h2 class="section-title">Why Drive with QubCars?</h2>
		</div>
		<div class="item-list">
			<div class="wd-50">
				<div class="indiv-item">
					<div class="wd-30">
						<img class="item-img" src="img/freedom.jpg">
					</div>
					<div class="wd-70">
						<h2 class="heading">Freedom to go anywhere</h2>
						<p class="info">Your car is at your command, always. You can drive to any part of the country.</p>
					</div>
				</div>
				<div class="indiv-item">
					<div class="wd-30">
						<img class="item-img" src="img/hassle-free.jpg">
					</div>
					<div class="wd-70">
						<h2 class="heading">Hassle-free</h2>
						<p class="info">Your car is pre-checked and verified at the pickup station.</p>
					</div>
				</div>
				<div class="indiv-item">
					<div class="wd-30">
						<img class="item-img" src="img/no-hidden-changes.jpg">
					</div>
					<div class="wd-70">
						<h2 class="heading">No hidden charges</h2>
						<p class="info">All prices includes taxes and fuel.</p>
					</div>
				</div>
			</div>
			<div class="wd-50">
				<div class="indiv-item" style="margin-left: 0">
					<div class="wd-30">
						<img class="item-img" src="img/convenient.jpg">
					</div>
					<div class="wd-70">
						<h2 class="heading">Convenient pickup</h2>
						<p class="info">Easy availability of cars across the city’s popular spots.</p>
					</div>
				</div>
				<div class="indiv-item" style="margin-left: 0">
					<div class="wd-30">
						<img class="item-img" src="img/insurance-cover.jpg">
					</div>
					<div class="wd-70">
						<h2 class="heading">Insurance cover</h2>
						<p class="info">Complete peace of mind with damage liability limited to Rs 10,000.</p>
					</div>
				</div>
				<div class="indiv-item" style="margin-left: 0">
					<div class="wd-30">
						<img class="item-img" src="img/roadside-assistance.jpg">
					</div>
					<div class="wd-70">
						<h2 class="heading">Roadside assistance</h2>
						<p class="info">Any wear or tear or other vehicle breakdown assistance.</p>
					</div>
				</div>
			</div>
		</div>
	</div>



	<?php include 'includes/footer.php'; ?>

	<script type="text/javascript" src="js/navbar.js"></script>
	<script type="text/javascript" src="js/drive.js"></script>

</body>
</html>