<?php
  define('DB_HOST', 'localhost');
  define('DB_USER', 'Abrar');
  define('DB_PASS', 'rifrarrifra');
  define('DB_NAME', 'car_service');

  
  //Create connection
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  //Check connection
  if($conn->connect_error){
    die('Connection Failed' .$conn->connect_error);
  }

//   echo 'CONNECTED!';