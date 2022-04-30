<?php
include "db_connect.php";
$dbname = "pemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("error" . $conn_connect_error);
}

$sql = "insert into Mahasiswa (nim, nama, prodi, gender, email) values ('201110179', 'Fatkhurrahman', 'Informatika', 'L', 'man@tkjpedia.com')";

if ($conn->query($sql) === TRUE) {
  echo "berhasil";
} else {
  echo "gagal" . $sql . $conn->error;
};
