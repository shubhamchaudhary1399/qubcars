<?php
require("includes/common.php");

if (!isset($_SESSION['email'])){
	header('location: login.php');
}

$from = $_POST['From'];
$from = mysqli_real_escape_string($con, $from);

$to = $_POST['To'];
$to = mysqli_real_escape_string($con, $to);

$when = $_POST['When'];
$when = mysqli_real_escape_string($con, $when);

if($when == 10){
	$when = "Now";
	$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
	$depart_day = $date->format('M d, Y');
	$depart_time = $date->format('g:i a');       //h:i
}
else{
	$when ="Later";
	$depart_day = $_POST['Depart-day'];
	$depart_day = mysqli_real_escape_string($con, $depart_day);
	$depart_time = $_POST['Depart-time'];
	$depart_time = mysqli_real_escape_string($con, $depart_time);
	$depart_time = date("g:i a", strtotime($depart_time));
}

$cab = $_POST['Cab'];
$cab = mysqli_real_escape_string($con, $cab);

$fare = $_POST['Fare'];
$fare = mysqli_real_escape_string($con, $fare);


$query = "INSERT INTO users_booking(user_id,source, destination, when_to, depart_day, depart_time, cab, fare, status)VALUES('" . $_SESSION['user_id'] . "','"  . $from . "','" . $to . "','" . $when . "','" . $depart_day . "','" . $depart_time . "','" . $cab . "','" . $fare . "','" ."Confirmed". "')";
mysqli_query($con, $query) or die(mysqli_error($con));

	header('location: success.php');



?>