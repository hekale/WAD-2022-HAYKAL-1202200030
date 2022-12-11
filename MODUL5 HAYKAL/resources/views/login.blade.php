<?php
session_start();
if(isset($_SESSION['user_id'])){
    header('Location: ../pages/Home_Hekal.php');
    die();
}
require "../config/connector.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        .img-login{
            background-image: url('../images/Alphard.jpg');
            height: 100vh;
            background-size: cover;
        }
    </style>  
</head>
<body class="container-fluid">
    <div class="row">
        <div class="col-6 img-login"></div>
    
        <div class="col-6">
            <div class="container">
            <?php if (isset($_SESSION['message']) && isset($_SESSION['color'])){ ?>
                <div class="alert <?php if($_SESSION['color'] == 'red'){echo "alert-danger";}
                elseif($_SESSION['color']=='green'){echo "alert-success";}?> alert-dismissible fade show fade in mt-3" role="alert">
                    <?=$_SESSION['message']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                unset($_SESSION['message']);
                unset($_SESSION['color']);
                }
            ?>
                <h3 class="mt-5">Login</h3>
                <form method="post" action="../config/login.php" enctype="multipart/form-data">
                    <label for="email" class="fw-bold">Email</label>
                    <input type="text" id="email" class="form-control mb-3" name="email" placeholder="Masukkan email" required>
                    <label for="pass" class="fw-bold">Kata Sandi</label>
                    <input type="password" id="pass" class="form-control mb-3" name="pass" placeholder="Masukkan Kata Sandi" required>
                    <input type="checkbox" class="form-label">Remember me</p>
                    <button type="submit" name='login' class="form-control btn btn-primary">Login</button>
                </form>
                <p>Anda belum punya akun?<a href="../pages/Register_Hekal.php"><u>Daftar</u></a></p>
            </div>
        </div>
    </div>   
</body>
</html>