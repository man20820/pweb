<?php
$servername = "localhost";
$username = "ppweb-uts";
$password = "1qazxsw2";
$dbname = "ppweb_uts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
