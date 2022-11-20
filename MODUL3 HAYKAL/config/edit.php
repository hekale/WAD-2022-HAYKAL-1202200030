<?php
include './config/connector.php';

$id = $_GET['id'];
$carname = $_POST['mobil'];
$pemilik = $_POST['pemilik'];
$brand = $_POST['merk'];
$pembelian = $_POST['tanggal'];
$describe = $_POST['deskripsi'];
$status = $_POST['lunas'];

$imgfoto = $_FILES['Foto']['name'];
$tmpname = $_FILES['Foto']['tmp_name'];
$target = "../images";
$upload = move_uploaded_file($tmpname, $target, $imgfoto);

if ($upload){
  $sql = "UPDATE showroom_hekal_table 
    SET Nama_mobil ='$carname', Pemilik_mobil='$pemilik', Merk_mobil='$brand', Tanggal_beli='$pembelian', Deskripsi='$describe',
    Foto_mobil='$imgfoto', Status_pembayaran='$status'
    WHERE id_mobil=$id";
} else {
  $sql ="UPDATE showroom_hekal_table
    SET Nama_mobil='$carname', Pemilik_mobil='$pemilik', Merk_mobil='$brand', Tanggal_beli='$pembelian', Deskripsi='$describe',
    Status_pembayaran='$status
    WHERE id_mobil=$id";
}

$update = mysqli_query($db, $sql);

if($update){
  session_start();
  $_SESSION['msg'] = 'success';
  redirect('../pages/ListCar_Hekal.php');
} else {
  session_start();
  $_SESSION['msg'] = 'failed';
  return redirect('../pages/ListCar_Hekal.php');
}
?>