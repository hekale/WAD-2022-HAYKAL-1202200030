<?php $db = mysqli_connect('localhost', 'root', '', 'wad_modul4_hekal');

$email = $_POST['email'];
$nama = $_POST['nama'];
$nomor = $_POST['nohp'];
$password = $_POST['pass'];
$pass = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO user_haykal (nama, email, password, no_hp) VALUES('$nama', '$email','$pass', '$nomor')";

if(mysqli_query($db, $sql)){
    session_start();
    $_SESSION['color'] = 'green';
    $_SESSION['message'] = 'Pendaftaran berhasil';
    header("Location: ../pages/Login_Hekal.php");
    die();
}
else{
    header("Location: ../pages/Register_Hekal.php");
    die();
}
?>