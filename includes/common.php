<?php
    $con = mysqli_connect("localhost", "root", "", "qubcars")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
