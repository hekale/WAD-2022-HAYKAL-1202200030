<?php
require './connector.php';

$id = $_GET['id'];
$carname = $_POST['mobil'];
$pemilik = $_POST['pemilik'];
$brand = $_POST['merk'];
$pembelian = $_POST['tanggal'];
$describe = $_POST['deskripsi'];
$status = $_POST['pembayaran'];
$images = $_FILES['foto']['name'];

$target = "../asset/images/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
  $sql = "UPDATE showroom_hekal_table SET nama_mobil = '$carname', pemilik_mobil = '$pemilik', merk_mobil = '$brand', tanggal_beli = '$pembelian', deskripsi = '$describe', foto_mobil = '$images', status_pembayaran = '$status' WHERE id_mobil = $id";
  if (mysqli_query($connection, $sql)) {
    header("location: ../pages/ListCar_Hekal.php");
  } else {
    echo "Error";
  }
} else {
  echo "Error";
}