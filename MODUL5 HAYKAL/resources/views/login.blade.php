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
                <h3 class="mt-5">Login</h3>
                <form method="post" action="/register" enctype="multipart/form-data">
                    <label for="email" class="fw-bold">Email</label>
                    <input type="text" id="email" class="form-control mb-3" name="email" placeholder="Masukkan email" required>
                    <label for="pass" class="fw-bold">Kata Sandi</label>
                    <input type="password" id="pass" class="form-control mb-3" name="pass" placeholder="Masukkan Kata Sandi" required>
                    <input type="checkbox" class="form-label">Remember me</p>
                    <button type="submit" name='login' class="form-control btn btn-primary">Login</button>
                </form>
                <p>Anda belum punya akun?<a href="/register"><u>Daftar</u></a></p>
            </div>
        </div>
    </div>   
</body>
</html>