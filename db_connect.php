<?php
echo "NIM: 201110179\n";
echo "Nama: Fatkhurrahman\n";

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connection successfully\n";
