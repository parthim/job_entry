<?php
  //DB Credentials
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');


  $host = "localhost";
  $userName = "parthim";
  $password = "Asscod0331";
  $db = 'training_project';
  // Create connection
  $conn = new mysqli($host, $userName, $password,$db);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully";
?>