<?php
require '../config/connector.php';
$id = $_GET['id'];
$sql = "SELECT * FROM showroom_hekal_table WHERE id_mobil = $id";
$hasil = mysqli_query($connection, $sql);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Car - Hekal_1202200030</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/style.css'; ?>
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" href="../index.php">Home</a>
          <a class="nav-link" style="color: white;" href="#">My Car</a>
        </div>
      </div>
    </div>
  </nav>

  <section id='detail'>
    <div class="container">
      <?php
      while ($getDetail = mysqli_fetch_array($hasil)) {
        echo "
                <h1 class='tambahh1'>" . $getDetail["nama_mobil"] . "</h1>
                <p class='tambahp'>Detail Mobil " . $getDetail["nama_mobil"] . "</p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                  <img src='../images/" . $getDetail["foto_mobil"] . "' alt='foto_mobil'>
                  <form action='' enctype='multipart/form-data'>
                    <label for='nama' class='form-label fw-bold'>Nama Mobil</label>
                    <input type='text' id='nama' class='form-control' name='nama' value='" . $getDetail["nama_mobil"] . "' readonly>
                    <label for='pemilik' class='form-label fw-bold'>Nama Pemilik</label>
                    <input type='text' id='pemilik' class='form-control' name='pemilik' value='" . $getDetail["pemilik_mobil"] . "' readonly>
                    <label for='merk' class='form-label fw-bold'>Merk</label>
                    <input type='text' id='merk' class='form-control' name='merk' value='" . $getDetail["merk_mobil"] . "' readonly>
                    <label for='tanggalbeli' class='form-label fw-bold'>Tanggal Beli</label>
                    <input type='date' id='tanggalbeli' class='form-control' name='tanggalbeli' value='" . $getDetail["tanggal_beli"] . "' readonly>
                    <label for='desc' class='form-label fw-bold'>Deskripsi</label>
                    <textarea id='desc' class='form-control' name='desc' style='height:200px; width: 600px; border-radius: 8px;' readonly> " . $getDetail["deskripsi"] . " </textarea>
                    <label for='inputGroupFile01'class='form-label fw-bold'>Foto</label>
                    <div class='input-group mb-3'>
                      <input type='text' class='form-control' id='inputGroupFile01' value='" . $getDetail["foto_mobil"] . "' readonly>
                    </div>
                    <label for='status' class='form-label fw-bold'>Status Pembayaran</label>
                    <span class='d-flex'>
                      <input class='form-check-input' type='radio' name='status' id='lunas' value='Lunas' " . (($getDetail["status_pembayaran"] == 'Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label class='form-check-label' for='lunas' style='margin-top: 15px; margin-right:10px;'>Lunas</label>
                      <input class='form-check-input' type='radio' name='status' id='belum' value='Belum Lunas' " . (($getDetail["status_pembayaran"] == 'Belum Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label class='form-check-label' for='belum' style='margin-top: 15px;'>Belum Lunas</label>
                    </span>
                    <a href='Edit_Hekal.php?id=" . $getDetail["id_mobil"] . "' class='btn btn-primary' style='margin-top: 40px;'>Edit</a>
                  </form>
                </div>
            ";
      }
      ?>
    </div>
  </section>

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>