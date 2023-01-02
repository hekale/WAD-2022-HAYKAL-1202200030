<?php
include "koneksi.php";

$id_mhs = $_POST['id_mhs'];
$query = "SELECT * FROM tb_mahasiswa WHERE id_mhs='id_mhs'";
$tampil = mysql_query($query);
$data = mysql_fetch_array($tampil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Siswa</title>
</head>
<body>
    <h1>Form Siswa</h1>
    <form method ="POST">
        <table border="0">
            <tr>
                <td>NIM Siswa</td>
                <td><input type="text" name="id_mhs" value="<?php echo $data['id_mhs']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>"></td>
            </tr>
            <tr>
                <td>Mata pelajaran</td>
                <td><input type="text" name="mata_pelajaran" value="<?php echo $data['mata_pelajaran']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="simpan" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
//proses mengubah data
include "koneksi.php";

$id_mhs = $_POST['id_mhs'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$mata_pelajaran = $_POST['mata_pelajaran'];

if(isset($_POST['ubah'])){
    $update = mysql_query("UPDATE tb_mahasiswa
                            SET nama ='$nama',
                            jurusan='$jurusan',
                            mata_pelajaran='$mata_pelajaran',
                            WHERE id_mhs ='$_GET[id_mhs]'");
if($update)
{
    header("location:tampil.php");
}
}
?>