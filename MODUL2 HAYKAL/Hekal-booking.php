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
                <a class="nav-link text-light" href="Hekal-index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Booking</a>
            </li>
        </ul>
    </nav>
    <section class="container text-center">
        <h1 class="text-center">Rent your Car Now!</h1>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-6">
                <img src="<?=$car['image']?>.jpg">
                <form action="Hekal-mybooking.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="NAMA_NIM">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Book Date</label>
                        <input type="date" class="form-control" id="date" name="date" placeholder="Tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Start Time</label>
                        <input type="time" class="form-control" id="time" name="time" placeholder="Waktu">
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration (days)</label>
                        <input type="text" class="form-control" id="duration" name="duration" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="mobil" class="form-label">Car Types</label>
                        <select name="mobil" id="mobil" class="form-select">
                            <option selected disabled>Choose your car</option>
                            <option value="Alphard">Alphard</option>
                            <option value="Mobilio">Mobilio</option>
                            <option value="Avanza">Avanza</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-group">Phone number</label>
                        <input type="text" class="form-control" id="phone" name="number" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label id="service" for="service">Add Service</label>
                        <div class="form-check">
                            <label class="form-check-label">Health Protocol / Rp. 25.000,00-</label>
                            <input type="checkbox" name="Health Protocol"class="form-check-input" value="1" id="Health Protocol">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">Driver / Rp. 100.000,00-</label>
                            <input type="checkbox" name="Driver" class="form-check-input" value="1" id="Driver">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">Full Filled / Rp. 250.000,00-</label>
                            <input type="checkbox" name="Full Filled" class="form-check-input" value="1" id="Full Filled">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success w-100" type="submit" name="submit">Book</button>
                            </div>
                        </div>
                    </div>
                </form>
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