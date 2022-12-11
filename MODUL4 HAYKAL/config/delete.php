<?php
require './connector.php';

$id = $_GET['id'];

$mysql = "DELETE FROM showroom_hekal_table WHERE id_mobil = $id";

if (mysqli_query($connection, $mysql)) {
  header("location: ../pages/ListCar_Hekal.php?pesan=delete");
} else {
  echo "Error";
}
