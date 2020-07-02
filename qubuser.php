<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome | QubCars</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/qubuser.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
	<?php include 'includes/navbar.php'; ?>
	<div class="top-banner">
		<div class="f-overlay">
			<div class="banner">
				<div id="top_heading">
					<h1 id="top_title">Welcome to Qubcars</h1>
					<label id="top_subtitle" class="hide-on-xs">
						Flexible packages at affordable prices
					</label>
				</div>
			</div>
		</div>	
	</div>

	<div class="t-container">
		<div class="section-heading" style="padding-left: 0;">
			<h2 class="section-title">Your Bookings</h2>
		</div>
		<div class="t-row">
			<?php
			$user_id = $_SESSION['user_id'];
			$query = "SELECT users_booking.source AS Source, users_booking.destination AS Destination, users_booking.depart_day AS Day, users_booking.depart_time AS Dtime, users_booking.cab AS Cab, users_booking.fare AS Fare, users_booking.status AS Status FROM users_booking WHERE users_booking.user_id='$user_id' and status='Confirmed'";
			$result = mysqli_query($con, $query)or die($mysqli_error($con));
			if (mysqli_num_rows($result) >= 1) {
			?>
			<table>
				<thead>
					<tr>
						<th>Source</th>
						<th>Destination</th>
						<th>Date</th>
						<th>Time</th>
						<th>Cab</th>
						<th>Fare</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>
								<td>" . $row["Source"] . "</td>
								<td>" . $row["Destination"] . "</td>
								<td>" . $row["Day"] . "</td>
								<td>" . $row["Dtime"] . "</td>
								<td>" . $row["Cab"] . "</td>
								<td>" . $row["Fare"] . "</td>
							 </tr>";
					}
					?>		
				</tbody>
			</table>
			<?php
			} else{
				echo "<center><h2>Oops not booked yet! Need Help?</h2></center>";
			}
			?>
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
</body>
</html>