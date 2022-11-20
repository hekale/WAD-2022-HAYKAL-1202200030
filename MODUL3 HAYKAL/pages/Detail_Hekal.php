<?php
include('../config/connector.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM showroom_hekal_table WHERE id_mobil=$id";
    $query = mysqli_query($db, $sql);
    $item = mysqli_fetch_assoc($query);
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
      crossorigin="anonymous">
      <title>Rental Mobil Modul 3</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./pages/Detail_Hekal.php">Mycar</a>
                  </li>
                </ul>
              </div>
              <button type="button" class="btn btn-light" href="./pages/Add_Hekal.php">Add Car</button>
            </div>
          </nav>
          <div class="container py-5">
            <h1><?=$item['Merk_mobil'].''.$item['Nama_mobil']?></h1>
            <p>Detail Mobil <?=$item['Merk_mobil'].''.$item['Nama_mobil']?></p>
            <div class="row">
                <div class="col-lg-6">
                  <img src="./images/<?=$item['Foto_mobil']?>" class="img-fluid">
                </div>
                <div class="col-lg-6">
                  <form method="POST" action="../config/insert.php">
                    <label for="mobil" class="fw-bold">Nama Mobil</label>
                    <input type="text" id="nama" class="form-control" name="mobil" value="<?$item['Nama_mobil']?>" readonly>
                    <label for="pemilik" class="fw-bold">Nama Pemilik</label>
                    <input type="text" id="pemilik" class="form-control" name="pemilik" value="<?$item['Pemilik_mobil']?>" readonly>
                    <label for="merk" class="fw-bold">Merk</label>
                    <input type="text" id="merk" class="form-control" name="merk" value="<?$item['Merk_mobil']?>" readonly>
                    <label for="date" class="fw-bold">Tanggal beli</label>
                    <input type="date" id="tglbeli" class="form-control" name="tanggal" value="<?$item['Tanggal_beli']?>" readonly>
                    <label for="deskripsi" class="fw-bold">Deskripsi</label>
                    <input type="text" id="desc" class="form-control" name="deskripsi" value="<?$item['Deskripsi']?>" readonly>
                    <label for="foto" class="fw-bold">Foto</label>
                    <input type="text" id="inputfile1" class="form-control" name="foto" value="<?$item['Foto_mobil']?>" readonly>
                    <div class="mb-3">
                        <input type="radio" id="lunas" name="pembayaran" 
                        <?php if($item['Status_pembayaran']=='Lunas'){echo'checked';}?> disabled>
                        <label for="lunas" class="font-weight-bold">Lunas</label>
                        <input type="radio" id="belum" name="pembayaran"
                        <?php if($item['Status_pembayaran']=='Belum Lunas'){echo'checked';}?> disabled>
                        <label for="belum" class="font-weight-bold">Belum Lunas</label>
                    </div>
                    <a href="Edit_Hekal.php?id=<?$item['id_mobil']?>" class="btn btn-primary px-5">Edit</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>