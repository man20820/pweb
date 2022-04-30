<?php
include "db_connect.php";
$dbname = "pemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("error" . $conn_connect_error);
}

$sql = "create table Mahasiswa (
  nim int (6) unsigned auto_increment primary key,
  nama varchar (30) not null,
  prodi varchar (30) not null,
  gender enum ('L', 'P'),
  email varchar (50)
)";

if ($conn->query($sql) === TRUE) {
  echo "berhasil";
} else {
  echo "gagal" . $conn->error;
};
