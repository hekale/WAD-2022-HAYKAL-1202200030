<?php
include "koneksi.php";

$id_mhs=$_GET['id_mhs'];
$query = mysql_query("DELETE FROM tb_mahasiswa WHERE id_mhs='$id_mhs'");
if($query){
    header ("location:tampil.php");
}
?>