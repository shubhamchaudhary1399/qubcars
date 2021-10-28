<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp | QubCars</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<?php include 'includes/navbar.php'; ?>

	<div class="userform">
		<div class="form-heading">
			<h2>Sign Up to Ride</h2>
			<h6 id="subheading">Reliable rides in minutes</h6>
		</div>
		
		<div class="form">
			<form method="POST" action="signup_script.php" name="SignUp_User">
				<div class="f_name">
					<label for="fname">First name (required)</label><br>
					<input type="text" name="firstname" id="fname" placeholder="First name" required>
				</div>
				<div class="l_name">
					<label for="lname">Last name (required)</label><br>
					<input type="text" name="lastname" id="lname" placeholder="Last name" required>
				</div>
				<label for="phonenumber">Enter your phone number (required)</label><br>
				<input type="tel" name="Phonenumber" maxlength="10" id="phonenumber" placeholder="Phone number" required>
				<?php
                if(isset($_GET["m1"])){
                  echo $_GET['m1'];
                }?>

				<label for="email">Enter your email (required)</label><br>
				<input type="email" name="Email" id="email" placeholder="Email" required>
				<?php
                if(isset($_GET["m2"])){
                    echo $_GET['m2'];
                }?>

				<label for="password">Enter a password (required)</label><br>
				<input type="password" name="Password" id="password" placeholder="Password" pattern=".{6,}" required>

				<input type="checkbox" name="terms" value="agree" required=""> I agree to terms and conditions <br>

				<input type="submit" name="" class="btn" value="Sign Up" id="submit" onclick="return submitForm();">
			</form>
	
		</div>
		
	</div>

	<?php include 'includes/footer.php'; ?>
		
	<script type="text/javascript" src="js/navbar.js"></script>
	<script type="text/javascript" src="js/signup.js"></script>

</body>
</html>