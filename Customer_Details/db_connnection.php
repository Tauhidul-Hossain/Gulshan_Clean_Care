<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="/gcnc_client";

  $mysqli = new mysqli("localhost", $username, $password, $database);
  // set the PDO error mode to exception
  $mysqli->select_db($database) or die( "Unable to select database");
  echo "Connected successfully";
?>