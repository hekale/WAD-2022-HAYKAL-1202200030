<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Mahasiswa</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nomor absen</td>
            <td>Nim Siswa</td>
            <td>Nama Siswa</td>
            <td>Jurusan</td>
            <td>Mata Pelajaran</td>
        </tr>
        <tr>
            <?php
            include "koneksi.php";

            $query="SELECT * FROM tb_mahasiswa";
            $tampil = mysql_query($query);
            $no=1;
            while($data=mysql_fetch_array($tampil)){

            ?>

            <tr>
                <td><?php echo $no++;?> </td>
                <td><?php echo $data['id_mhs'];?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['jurusan'];?></td>
                <td><?php echo $data['mata_pelajaran'];?></td>
                <td>
                    <a href ="ubah.php?id_mhs=<?php echo $data['id_mhs'];?>"
                        onclick="return confirm('apakah anda yakin akan mengupdate data ini?')">ubah</a>
                    <<a href ="hapus.php?id_mhs=<?php echo $data['id_mhs'];?>"
                        onclick="return confirm('apakah anda yakin akan menghapus data ini?')">ubah</a>
                </td>
            </tr>
            <?php
            }
            ?>
            </table>
</body>
</html>