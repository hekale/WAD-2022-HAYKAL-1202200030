<?php
require '../config/connector.php';

$query = "SELECT * FROM showroom_hekal_table";
$hasil = mysqli_query($connection, $query);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Car - Haykal_1202200030</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../style/style.css'; ?>
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" href="../pages/Home_Hekal.php">Home</a>
          <a class="nav-link" style="color: white;" href="#">My Car</a>
        </div>
        <a href="Add_Hekal.php" style="background-color: white; color:blue; border-radius: 5px; text-decoration: none; width: 150px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;">Add Car</a>
      </div>
    </div>
    <div class="dropdown me-2">
            <button class="btn btn-light text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?=$_SESSION['user_name'];?>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../pages/Profil_Hekal.php">Profile</a></li>
                <li><a class="dropdown-item" href="../pages/Home1_Hekal.php">Log Out</a></li>
            </ul>
    </div>
  </nav>

  <section id="list">
    <div class="container">
      <div>
        <h1>My Showroom</h1>
        <p>List Mobil Showroom Hekal</p>
        <div class="d-flex gap-5">
          <?php
          if (mysqli_num_rows($hasil) > 0) {
            while ($row = mysqli_fetch_assoc($hasil)) {
              echo "<div class='card cardcontent' style='width: 18rem;'>
            <img src='../images/" . $row["foto_mobil"] . "' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
            <div class='card-body'>
              <h5 class='card-title'>" . $row["nama_mobil"] . "</h5>
              <p class='card-text'>" . substr($row["deskripsi"], 0, 50) . '...' . "</p>
              <span class='d-flex'>
                <a href='Detail_Hekal.php?id=" . $row["id_mobil"] . "' class='btn btn-primary' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                <a href='../config/delete.php?id=" . $row["id_mobil"] . "' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px; margin-left:20px;'>Delete</a>
              </span>
            </div>
          </div>";
            }
          } else {
            echo "0 hasil";
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <footer class="fixed-bottom" style="padding-bottom: 50px;">
    <div class="container">
      <p style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #757575;">Jumlah Mobil : <?php echo mysqli_num_rows($hasil) ?></p>
    </div>
  </footer>

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>