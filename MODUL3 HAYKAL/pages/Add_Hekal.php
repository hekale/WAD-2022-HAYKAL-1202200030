<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Car Hekal_1202200030</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../style/style.css'; ?>
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

  <section id='form'>
    <div class="container ">
      <h1 class="tambahh1">Tambah Mobil</h1>
      <p class="tambahp">Tambah Mobil Baru Anda Ke List Showroom</p>

      <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="nama" class="form-label fw-bold">Nama Mobil</label>
        <input type="text" id="mobil" class="form-control" name="mobil" placeholder="Masukkan Nama Mobil">
      </div>

      <div class="mb-3">
        <label for="pemilik" class="form-label fw-bold">Nama Pemilik</label>
        <input type="text" id="pemilik" class="form-control" name="pemilik" placeholder="Masukkan Nama Pemilik">
      </div>

      <div class="mb-3">
        <label for="merk" class="form-label fw-bold">Merk</label>
        <input type="text" id="merk" class="form-control" name="merk" placeholder="Masukkan Merk Mobil">
      </div>

      <div class="mb-3">
        <label for="tanggalbeli" class="form-label fw-bold">Tanggal Beli</label>
        <input type="date" id="tanggalbeli" class="form-control" name="tanggalbeli">
      </div>

      <div class="mb-3">
        <label for="desc" class="form-label fw-bold">Deskripsi</label>
        <textarea id="deskripsi" name="describe" class="form-control"  placeholder="Masukkan Deskripsi Mobil" style="height:200px; width: 1000px; border-radius: 8px;"></textarea>

      </div>
      <div class="mb-3">
        <label for="inputGroupFile01" class="form-label fw-bold">Foto</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="foto" style="height: 40px;">
      </div>

      <div class="mb-3">
        <label for="status" class="form-label fw-bold">Status Pembayaran</label>
        <span class="d-flex">
          <input class="form-check-input" type="radio" name="pembayaran" id="lunas" value="Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label class="form-check-label" for="lunas" style="margin-top: 15px; margin-right:10px;">Lunas</label>
          <input class="form-check-input" type="radio" name="pembayaran" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label class="form-check-label" for="belum" style="margin-top: 15px;">Belum Lunas</label>
        </span>
      </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>