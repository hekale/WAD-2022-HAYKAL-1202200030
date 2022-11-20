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
                    <a class="nav-link active" aria-current="page" href="./pages/ListCar_Hekal.php">Mycar</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="container">
            <h1 class = "tambahmobil">Tambah Mobil</h1>
            <p class = "tambahmobil1">Tambah Mobil Baru Anda Ke List Show Room</p>
          </div>
          <div class="mb-3"></div>
          <div class="container mt-5" style="width:50%">
            <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlinput1" class="form-label fw-bold">Nama Mobil</label>
                    <input type="text" id="nama" class="form-control" placeholder="Nama Mobil" name="mobil">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlinput1" class="form-label fw-bold">Nama Pemilik</label>
                    <input type="text" id="pemilik" class="form-control" placeholder="Nama - NIM" name="pemilik">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlinput1" class="form-label fw-bold">Merk</label>
                    <input type="text" id="merk" class="form-control" placeholder="Tipe Mobil" name="merk">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlinput1" class="form-label fw-bold">Tanggal Beli</label>
                  <input type="date" id="tglbeli" class="form-control" placeholder="" name="tanggal">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlinput1" class="form-label fw-bold">Deskripsi</label>
                  <textarea class="form-control" rows="3" id="desc" name="deskripsi"> </textarea>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlinput1" class="form-label fw-bold">Foto</label>
                  <input type="file" id="inputfile1" class="form-control" placeholder="" name="foto">
                </div>
                <div class="mb-3">
                    <div class="fw-bold">Status Pembayaran</div>
                    <input type="radio" id="lunas" class="form-check-input" name="pembayaran" value="Lunas">
                    <label for="lunas" class="font-weight-bold">Lunas</label>
                    <input type="radio" id="belum" class="form-check-input" name="pembayaran" value="Belum Lunas">
                    <label for="belum" class="font-weight-bold">Belum Lunas</label>
                </div>
                <button type="submit" class="btn btn-primary" name="">Submit</button>
            </form>
          </div>
    </body>
    </html>