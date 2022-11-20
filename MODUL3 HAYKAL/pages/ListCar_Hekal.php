<?php
include 'connector.php';
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
      <style>
      .toast {
            position: absolute;
            bottom: 3rem;
            right: 3rem;
        }
        </style>
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
                    <a class="nav-link active" aria-current="page" href="ListCar_Hekal.php">Mycar</a>
                  </li>
                </ul>
                <a href = "../pages/Add_Hekal.php" class = "btn btn-light bg-white"> Add Car"</a>
              </div>
            </div>
          </nav>
          <section id="list">
          <div class="container py-5">
            <h1>My Showroom</h1>
            <p>List Showroom Hekal - 1202200030</p>
            <div class="row mb-5">
                <?php 
                $sql = "SELECT * FROM showroom_hekal_table";
                $query = mysqli_query($db, $sql);
                $count_row = mysqli_num_rows($query);
        
                while($item = mysqli_fetch_array($query)){  
                ?>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="../assets/images/<?=$item['Foto_mobil']?>" class="img-thumbnail">
                            <h4 class="mt-3"><?=$item['Merk_mobil'].' '.$item['Nama_mobil']?></h4>
                            <div class="mb-4"><?=$item['Deskripsi']?></div>
                            <a href="/pages/Detail_Hekal.php?id=<?=$item['id_mobil']?>" class="btn btn-primary px-5 rounded-pill">Detail</a>
                            <a href="/config/delete.php?id=<?=$item['id_mobil']?>" class="btn btn-danger px-5 rounded-pill">Delete</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <p class="fw-bold">Jumlah Mobil: <?=$count_row?></p>
        </div>

        <?php
        session_start();
        if (!empty($_SESSION['msg'])) {
        ?>
        <div class="toast show align-items-center text-bg-dark border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                Data berhasil ditambahkan.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        <?php
        unset($_SESSION['msg']);
        }
        ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" 
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" 
    crossorigin="anonymous"></script>
</html>