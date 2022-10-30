<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Booking</a>
            </li>
        </ul>
    </nav>
    <section>
        <div class="container text-center">
          <h2 class="mb-3">Welcome To EAD RENT</h2>
          <p>Find your best deal, here</p>
        </div>
    </section>
    <section class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="/MODUL HAYKAL/Alphard.jpg" class="card-img-top" alt="relevant car x">
                        <div class="card-body">
                          <h5 class="card-title">Alphard<h5>
                          <p class="card-text">Rp800.000,-/Hari</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="text-center list-group-item text-primary">7 Kursi</li>
                          <li class="text-center list-group-item text-primary">3500 CC</li>
                          <li class="text-center list-group-item text-primary">Manual<li>
                        </ul>
                        <div class="card-body">
                          <a href="Booking.php?=<?php echo 'alphardx'?>" class="btn btn-primary card-link w-100">Book Now</a>
                        </div>
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="/MODUL HAYKAL/Mobilio.jpg" class="card-img-top" alt="relevant car x">
                        <div class="card-body">
                          <h5 class="card-title">Mobilio<h5>
                          <p class="card-text">Rp550.000,-/Hari</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="text-center list-group-item text-primary">5 Kursi</li>
                          <li class="text-center list-group-item text-primary">1950 CC</li>
                          <li class="text-center list-group-item text-primary">Automatic<li>
                        </ul>
                        <div class="card-body">
                          <a href="Booking.php?=<?php echo 'mobiliox'?>" class="btn btn-primary card-link w-100">Book Now</a>
                        </div>
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="/MODUL HAYKAL/Avanza.jpg" class="card-img-top" alt="relevant car x">
                        <div class="card-body">
                          <h5 class="card-title">Alphard<h5>
                          <p class="card-text">Rp600.000,-/Hari</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="text-center list-group-item text-primary">7 Kursi</li>
                          <li class="text-center list-group-item text-primary">1800 CC</li>
                          <li class="text-center list-group-item text-primary">Automatic<li>
                        </ul>
                        <div class="card-body">
                          <a href="Booking.php?=<?php echo 'avanzax'?>" class="btn btn-primary card-link w-100">Book Now</a>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <footer class="py-3 text-center" style="background-color: lightgray;">
      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalbutton">
          Created by Haykal_1202200030
      </button>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
      crossorigin="anonymous"></script>
</body>