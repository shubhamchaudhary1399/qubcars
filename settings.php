<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Settings | QubCars</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/settings.css">

</head>
<body>
	<?php include 'includes/navbar.php'; ?>
	<div class="settings-form">
		<h4>Change Password</h4>
		<form method="POST" action="settings_script.php" name="Change_password">
			<div>
                <input type="password" name="old_password" pattern=".{6,}" placeholder="Old Password" required>
            </div>
            <div>
                <input type="password" name="new_password" pattern=".{6,}" placeholder="New Password" required>
            </div>
            <div>
                <input type="password" name="repnew_password" pattern=".{6,}" placeholder="Re-type New Password" required>
            </div>
            <div id="red">
            	<?php
            		if(isset($_GET["error"])){
                        echo $_GET['error'];
                    }
            	?>
            </div>
            <div>
            	<input type="submit" name="" value="Change">
            </div>
		</form>
	</div>




	<?php include 'includes/footer.php'; ?>
	<script type="text/javascript" src="js/navbar.js"></script>
</body>
</html>