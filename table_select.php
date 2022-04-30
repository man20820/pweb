<?php
include "db_connect.php";
$dbname = "pemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("error" . $conn_connect_error);
}

$sql = "select nim, nama, prodi, gender, email from Mahasiswa";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "nim : " . $row["nim"] . "</br>" . "nama : " . $row["nama"] . "</br>" . "gender : " . $row["gender"] . "</br>";
  }
} else {
  echo "no result";
}
$conn->close();
