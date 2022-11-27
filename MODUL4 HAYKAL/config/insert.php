<?php
require './connector.php';

$carname = $_POST['mobil'];
$pemilik = $_POST['pemilik'];
$brand = $_POST['merk'];
$pembelian = $_POST['tanggalbeli'];
$describe = $_POST['describe'];
$status = $_POST['pembayaran'];

$images = $_FILES['foto']['name'];

$target = "../images " ;

if (move_uploaded_file($_FILES['foto']['tmp_name'], $target . $images)) {
  $sql = "INSERT INTO showroom_hekal_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$carname', '$pemilik', '$brand', '$pembelian', '$describe', '$images', '$status')";
  if (mysqli_query($connection, $sql)) {
    header("location: ../pages/ListCar_Hekal.php");
  } else {
    echo "Error";
  }
} else {
  echo "Error";
} 