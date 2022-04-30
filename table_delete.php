<?php
include "db_connect.php";
$dbname = "pemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("error" . $conn_connect_error);
}

$sql = "delete from Mahasiswa where nim=201110179";

if ($conn->query($sql) === TRUE) {
  echo "berhasil";
} else {
  echo "gagal" . $sql . $conn->error;
};

$conn->close();
