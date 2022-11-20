<?php
include './config/connector.php';

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM showroom_hekal_table WHERE id_mobil = $id";
  $query = mysqli_query($db, $sql);

  if($delete){
    session_start();
    $_SESSION['msg'] = 'success1';
    redirect('../pages/ListCar_Hekal.php');
  } else {
    session_start();
    $_SESSION['msg'] = 'failed1';
    return redirect('../pages/ListCar_Hekal.php');
  }
}
?>