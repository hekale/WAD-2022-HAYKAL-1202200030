<?php

if (include('./connector.php')){
  $imgfoto = $_FILES['Foto']['name'];
  $tmpname = $_FILES['Foto']['tmp_name'];
  $target = "../images";
  $upload = move_uploaded_file($tmpname, $target,$imgfoto);

  if($upload){
      $carname = $_POST['mobil'];
      $pemilik = $_POST['pemilik'];
      $brand = $_POST['merk'];
      $pembelian = $_POST['tanggal'];
      $describe = $_POST['deskripsi'];
      $images = $imgfoto;
      $status = $_POST['pembayaran'];

      $query = "INSERT INTO showroom_hekal_table (Nama_mobil, Pemilik_mobil, Merk_mobil, Tanggal_beli, Deskripsi, Foto_mobil,
                Status_pembayaran) 
                VALUES ('$carname','$pemilik','$brand','$pembelian','$describe','$images','$status')";
      $insert = mysqli_query($db, $query);

      if ($insert) {
        session_start();
        $_SESSION['msg'] = 'success';
        redirect('../pages/ListCar_Hekal.php');
      } else {
        session_start();
        $_SESSION['msg'] = 'failed';
        redirect('../pages/ListCar_Hekal.php');
      }
  } else {
      echo "Gagal mengunggah gambar";
  }
} else {
  session_start();
  $_SESSION['msg'] = 'failed1';
  return redirect('../pages/ListCar_Hekal.php');
}
?>
<?php

include('..\config\connector.php');


if (isset($_POST['selesai'])){
    $idMobil = rand();
    $namaMobil = $_POST['namaMobil'];
    $namaPemilik = $_POST['namaPemilik'];
    $merk = $_POST['merk'];
    $tglBeli = $_POST['tglBeli'];
    $deskripsi = $_POST['deskripsi'];

    $foto = $_FILES["foto"]["name"];
    $temp = $_FILES["foto"]["tmp_name"];
    $folder = "../assets/images/" . $foto;
    move_uploaded_file($temp, '../assets/images/'.$foto);
    $pembayaran = $_POST['statusPembayaran'];

    $query = mysqli_query($conn, "INSERT INTO showroom_ivan_table(id_mobil,nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran)
    VALUES('$idMobil','$namaMobil','$namaPemilik','$merk','$tglBeli','$deskripsi','$foto','$pembayaran')");

    if ($query){
        header('Location: ./Add-Ivan.php');
    }
}
?>