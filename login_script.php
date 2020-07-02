<?php

require("includes/common.php");

$email = $_POST['Email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['Password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);


$query = "SELECT id, firstname, email FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num == 0) {
  $_SESSION['error'] = "<span class='red'></br>Enter Correct E-mail and Password Combination</span>";
  header('location: login.php?error=' . $_SESSION['error']);
} else {
  $row = mysqli_fetch_array($result);

  $_SESSION['firstname'] = $row['firstname'];
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: qubuser.php');
}
?>
