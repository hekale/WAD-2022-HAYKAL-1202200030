<?php
include "koneksi.php";

$id_mhs=$_POST['id_mhs'];
$nama = $_POST['nama'];
$jurusan = $_POST['$jurusan'];
$mata_pelajaran = $_POST ['mata_pelajaran'];

if(isset($_POST['simpan'])){
    $query=mysql_query("insert into tb_mahasiswa values('$id_mhs','$nama','$jurusan','$mata_pelajaran')")or die (mysql_error());
    if ($query) {
        echo "Data Tersimpan";
    }else{
        echo "Gagal Tersimpan";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <tittle>Form Data Siswa</tittle>
</head>
<body>
        <h1>Form Siswa</h1>
        <form method="POST">
            <table border="0">
                <tr>
                    <td>NIM Siswa</td>
                    <td><input type ="text" name="id_mhs"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type ="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type ="text" name="jurusan"></td>
                </tr>
                <tr>
                    <td>Mata pelajaran</td>
                    <td><input type ="text" name="mata_pelajaran"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="simpan" value="simpan"></td>
                </tr>
            </table>
        </form>
</body>
</html>