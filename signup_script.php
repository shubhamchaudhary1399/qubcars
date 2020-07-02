<?php

require("includes/common.php");

  $firstname = $_POST['firstname'];
  $firstname = mysqli_real_escape_string($con, $firstname);

  $lastname = $_POST['lastname'];
  $lastname = mysqli_real_escape_string($con, $lastname);

  $contact = $_POST['Phonenumber'];
  $contact = mysqli_real_escape_string($con, $contact);

  $email = $_POST['Email'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['Password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[6789][0-9]{9}$/";

  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);

  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</br></span>";
    header('location: signUp.php?m2=' . $m);
  } 
  else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</br></span>";
    header('location: signUp.php?m1=' . $m);   
  } 
  else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</br></span>";
    header('location: signUp.php?m2=' . $m);
    
  } else {

    $query = "INSERT INTO users(firstname, lastname, contact, email, password)VALUES('" . $firstname . "','" . $lastname . "','" . $contact . "','" . $email . "','" . $password . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);

    $_SESSION['firstname'] = $firstname;
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: index.php');
  }
?>
