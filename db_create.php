<?php
include "db_connect.php";

$sql = "create database pemweb";
if ($conn->query($sql) === TRUE) {
  echo "sukses";
} else {
  echo "error" . $conn->error;
}
$conn->close();
