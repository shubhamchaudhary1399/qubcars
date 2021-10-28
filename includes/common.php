<?php
    $con = mysqli_connect("us-cdbr-east-04.cleardb.com", "bb1526a897a02e", "8601874e", "heroku_79bc2955dfae004")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
