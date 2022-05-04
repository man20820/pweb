<?php
$servername = "95.111.199.187";
$username = "man_pwuts";
$password = "pwuts";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";