<?php

$servername = "localhost";
$username = "root";
$password = "";
$databseName = "otp_verification";

// Create connection
$conn = new mysqli($servername, $username, $password, $databseName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>