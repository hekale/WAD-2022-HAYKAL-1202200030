<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        .img-login{
            background-image: url('../images/Alphard.jpg');
            height: 100vh;
            background-size: cover;
        }
    </style>  
</head>


<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 img-login"></div>
        
            <div class="col-6">
                <div class="container">
                    <h3 class="mt-5">Register</h3>
                    <form method="POST" action="../config/register.php" enctype="multipart/form-data">
                        <label for="email" class="fw-bold">Email</label>
                        <input type="text" id="email" class="form-control mb-3" name="email" placeholder="Masukkan email" required>
                        <label for="nama" class="fw-bold">Nama</label>
                        <input type="text" id="nama" class="form-control mb-3" name="nama" placeholder="Masukkan nama" required>
                        <label for="nohp" class="fw-bold">Nomor Handphone</label>
                        <input type="text" id="nohp" class="form-control mb-3" name="nohp" placeholder="Masukkan no.hp" required>
                        <label for="pass" class="fw-bold">Kata Sandi</label>
                        <input type="password" id="passw" class="form-control mb-3" name="passw" placeholder="Masukkan Kata Sandi" required>
                        <label for="passauth" class="fw-bold">Konfirmasi Kata Sandi</label>
                        <input type="password" id="passauth" class="form-control mb-3" name="pass" placeholder="Konfirmasi Kata Sandi" required>
                        <button type="submit" class="form-control btn btn-primary">Daftar</button>
                    </form>
                    <p>Anda sudah punya akun? <a href="../pages/Login_Hekal.php"><u>Login</u></a></p>
                </div>
            </div>
        </div>   
    </div>
</body>
</html>