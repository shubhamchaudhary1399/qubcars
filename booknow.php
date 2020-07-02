<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>QubCars | Book a cab now</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/booknow.css">
	<!-- <script type="text/javascript" src="js/date-time.js"></script> -->
</head>
<body>
	<?php include 'includes/navbar.php'; ?>

	<div class="book-container">
		<div class="Qub-booking">
			<div class="booking-tab">
				<span class="tab-button" id="tab-c"><a href="#" class="links tab tab-active" onclick="bookMood(1);">City Taxi</a></span>
				<span class="tab-button" id="tab-o"><a href="#" class="links tab" onclick="bookMood(2);">Outstation</a></span>
				<span class="tab-button" id="tab-f"><a href="#" class="links tab" onclick="bookMood(3);">Fleet</a></span>		
			</div>
			<form method="POST" action="booknow_script.php" name="booking-cab">
				<div class="booking-fields">
					<div class="card">
						<div class="row">
							<div class="left">
								<label for="from">From</label>
							</div>
							<div class="right">
								<input type="text" name="From" id="from" placeholder="Source" onclick="getLocation();">
							</div>	
						</div>
					</div>
					<div class="card">
						<div class="row">
							<div class="left">
								<label for="to">To</label>
							</div>
							<div class="right">
								<input type="text" name="To" id="to" placeholder="Destination" onclick="destination();">
							</div>	
						</div>
					</div>
					<div class="card-when hide">
						<div class="row">
							<div class="left">
								<label for="when">When</label>
							</div>
							<div class="right">
								<select id="when" name="When">
									<option value="10">Now</option>
									<option value="11">Schedule for later</option>
								</select>
							</div>	
						</div>
					</div>
					<div class="card hide" id="depart-card">
						<div class="row">
							<div class="left">
								<label for="depart">Depart</label>
							</div>
							<div class="right">
								<div class="half">
									<select id="depart-day" name="Depart-day">
										<?php
										date_default_timezone_set('Asia/Kolkata');
										$date = date ("M d, Y", strtotime("+0 day"));
										$end_date = date ("M d, Y", strtotime("+6 day", strtotime($date)));
										
										while (strtotime($date) <=strtotime($end_date))
										{
        									echo '<option value = '.json_encode($date).'>'.$date.'</option>';
        									$date = date ("M d, Y", strtotime("+1 day", strtotime($date)));
        									
										}
										?>
									</select>
								</div>
								<div class="half">
									<select id="depart-time" name="Depart-time">
									<?php	
									for($hours=0; $hours<24; $hours++)
    									for($mins=0; $mins<60; $mins+=60)
       									 	echo '<option value = '.str_pad($hours,2,'0',STR_PAD_LEFT).':'
       									 	.str_pad($mins,2,'0',STR_PAD_LEFT).'>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                       							.str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';  ?>
									</select>
								</div>
							</div>	
						</div>
					</div>
					<div class="card-info hide">
						<div class="row">
							<div class="left">
								<label for="Cab">Cab</label>
							</div>
							<div class="right" id="booking-cab">
								<input type="text" name="Cab" id="Cab" placeholder="Cab" style="background: #FFF;">
							</div>	
						</div>
					</div>
					<div class="card-info hide">
						<div class="row">
							<div class="left">
								<label for="Fare">Fare</label>
							</div>
							<div class="right" id="booking-fare">
								<input type="text" name="Fare" id="Fare" placeholder="Fare" style="background: #FFF;">
							</div>	
						</div>
					</div>
					<div class="card search">
						<div class="row" style="padding: 10px 5px;">
							<input type="button" name="" class="btn" value="Search Cabs" id="search" onclick="cabList();">
						</div>
					</div>

					<!-- available cabs -->
					<div class="cab-list hide">
						<div class="card">
							<div class="row">
								<div class="left" style="width: 100%; font-size: 16px;">
									<label>AVAILABLE RIDES</label>
								</div>	
							</div>
						</div>
						<div class="card card-cab" onclick="bookingDetails(1);">
							<div class="row row-cab">
								<div class="left">
									<img class="cab-icon" src="img/ic_auto.png">
								</div>
								<div class="right">
									<div class="cab-name">
										Auto
									</div>
									<div class="cab-price">
										Rs. 131-135                
									</div>
									<div class="cab-detail">
										Get an auto at your doorstep
									</div>
								</div>	
							</div>
						</div>
						<div class="card card-cab" onclick="bookingDetails(2);">
							<div class="row row-cab">
								<div class="left">
									<img class="cab-icon" src="img/ic_mini.png">
								</div>
								<div class="right">
									<div class="cab-name">
										Mini
									</div>
									<div class="cab-price">
										Rs. 140-150
									</div>
									<div class="cab-detail">
										Comfty and pocket-friendly fares
									</div>
								</div>	
							</div>
						</div>
						<div class="card card-cab" onclick="bookingDetails(3);">
							<div class="row row-cab">
								<div class="left">
									<img class="cab-icon" src="img/ic_prime.png">
								</div>
								<div class="right">
									<div class="cab-name">
										Prime Sedan
									</div>
									<div class="cab-price">
										Rs. 160-165
									</div>
									<div class="cab-detail">
										Sedans with free wifi and top drivers
									</div>
								</div>	
							</div>
						</div>
	
					</div>
					<div class="card submit hide">
						<div class="row" style="padding: 10px 5px;">
							<input type="submit" value="Confirm & Book">
						</div>
					</div>
					
				</div>
			</form>
			
		</div>
	</div>

    <div id="map"></div>
    <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>



	<?php include 'includes/footer.php'; ?>
	<script type="text/javascript" src="js/navbar.js"></script>
	<script type="text/javascript" src="js/booknow.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI4Yuvt6lhMRcRJhb1I70ebGq101jNuJ4&libraries=places&callback=getLocation"
        async defer></script>
</body>
</html>