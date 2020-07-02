<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Success | QubCars</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/success.css">
</head>
<body>
	<?php include 'includes/navbar.php'; ?>
	<div class="s-container">
		<div class="s-img">
			<img id="confirm" src="img/svg/success.svg">
		</div>
		<div class="s-jumbotron">
			<div class="heading">
				<h2 align="center">Your booking is confirmed. Thank you for riding with us.</h2>
			</div>
            <p align="center">Click <a href="booknow.php">here</a> to book another ride.</p>
		</div>
	</div>







	<?php include 'includes/footer.php'; ?>
	<script type="text/javascript" src="js/navbar.js"></script>
</body>
</html>