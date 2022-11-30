<?php
require '../config/connector.php';

$query = "SELECT * FROM showroom_hekal_table";
$hasil = mysqli_query($connection, $query);

function onClick($hasil)
{
  if (mysqli_num_rows($hasil) > 0) {
    header("Location: ./pages/Register_Hekal.php");
  } else {
    header("Location: ./pages/Login_Hekal.php");
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modul 3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include 'style/style.css'; ?>
  </style>
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link text-light" href="#home">Home</a>
          <a class="nav-link" href="<?php if (mysqli_num_rows($hasil) > 0) {
                                      echo "./pages/Register_Hekal.php";
                                    } else {
                                      echo "./pages/Login_Hekal.php";
                                    } ?>">Login 
        </div>
      </div>
    </div>
  </nav>

  <section id="home">
    <div class="container">
      <div class="d-flex gap-5 cont justify-content-center align-items-center">
        <div>
          <h1>Selamat Datang Di<br /> Showroom Hekal</h1>
          <p class="mt-3">Showroom Hehekale .<br /> terbaik terkeren termurah ter ter ter tak hingga kealam semesta</p>
          <div class="d-flex align-items-center gap-5 mt-5">
            <img src="<?php echo "./images/logo-ead.png" ?>" alt="logoead" style="width:100px;">
            <p style="margin-top: 20px; font-size:14px;">Haykal_1202200030</p>
          </div>
        </div>
        <img src="<?php echo "./images/Alphard.jpg" ?>" alt="mobil">
      </div>
    </div>
  </section>
  <!-- Jumbotron End -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>