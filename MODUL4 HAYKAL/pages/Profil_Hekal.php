<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link text-light" href="../pages/Home_Hekal.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="ListCar_Hekal.php">Mycar</a>
        </ul>
        <a href="../pages/ListCar_Hekal.php" class="btn btn-light text-primary">Add Car</a>
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
<div class="container">
    <h3 class="mt-3"><b><center>Profile</center></b></h3>
    <div class="col-sm-12 col-md-12">
        <div class="block-flat">
          <div class="header">                          
            <h3>Horizontal Form</h3>
          </div>
          <div class="content">
            <form class="form-horizontal data-parsley-validate" role="form">
              <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Name" placeholder="Name">
              </div>
              </div>
              <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Address</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Address" placeholder="Address">
              </div>
              </div>
              <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">City</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="City" placeholder="City">
              </div>
              </div>
              <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Country</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Country" placeholder="Country">
              </div>
              </div>
              <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="Email2" placeholder="Email">
              </div>
              </div>
              <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="Password2" placeholder="Password">
              </div>
              </div>
              <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox" >
                <label>
                  <input type="checkbox" class="icheck"> Remember me
                </label>
                </div>
              </div>
              </div>
              <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Registrer</button>
                <button class="btn btn-default">Cancel</button>
              </div>
              </div>
            </form>
          </div>
        </div>              
      </div>
</div>  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>