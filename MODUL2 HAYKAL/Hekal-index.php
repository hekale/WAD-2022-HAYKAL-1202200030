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
  <?php
  $cars=[
    [
      "nama" => "Alphard",
      "harga" => 800000,
      "kursi" => 7,
      "CC" => 3500,
      "type" => 'Manual',
      "image" => 'Alphard',
      "value" => 1,
    ],
    [
      "nama" => "Mobilio",
      "harga" => 550.000,
      "kursi" => 5,
      "CC" => 1950,
      "type" => 'Automatic',
      "image" => 'Mobilio',
      "value" => 2,
    ],
    [
      "nama" => "Avanza",
      "harga" => 600.000,
      "kursi" => 7,
      "CC" => 1800,
      "type" => 'Automatic',
      "image" => 'Avanza',
      "value" => 3,
    ],
  ]
  ?>

  <body>
      <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link text-light" href="#">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-light" href="Hekal-booking.php">Booking</a>
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
          <?php foreach ($cars as $car) :?>
              <div class="row">
                  <div class="col-sm-4">
                      <div class="card" style="width: 18rem;">
                          <img src="<?=$car['image']?>.jpg" class="card-img-top">
                          <div class="card-body">
                            <h5 class="card-title"><?=$car['nama']?></h5>
                            <p class="card-text">Rp<?=$car['harga']?>,-/Hari</p>
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="text-center list-group-item text-primary"><?= $car['kursi']?> Kursi</li>
                            <li class="text-center list-group-item text-primary"><?= $car['CC']?> CC</li>
                            <li class="text-center list-group-item text-primary"><?= $car['type']?></li>
                          </ul>
                          <div class="card-body">
                            <a href="Hekal-booking.php" type="books" class="btn btn-primary card-link w-100">Book Now</a>
                          </div>
                        </div>
                  </div>
              </div>
          <?php endforeach;?>
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