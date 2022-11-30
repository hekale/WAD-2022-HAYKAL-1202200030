<?php
if(!isset($_SESSION)){
    session_start();
}
require "../config/connector.php";

if (isset($_POST['login'])) {
    $mail = $_POST['email'];
    $pass = $_POST['pass'];
}

$db = "INSERT INTO user_haykal (email,pass) VALUES ('mail', 'pass')";
$dbuname = "SELECT * FROM user_haykal WHERE email='$mail'";
$exe = mysqli_query($connection, $dbuname);

if (mysqli_num_rows($exe) == 1){
    $result = mysqli_fetch_assoc($exe);

    if(password_verify($pass, $result['password'])){
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_name'] = $result['nama'];
        header('Location: ../pages/Home_Hekal.php');
        exit();

    } else {
        $_SESSION['color'] = 'red';
        $_SESSION['message'] = 'Password Anda salah, silahkan coba lagi';
        header('Location: ../pages/Login_Hekal.php');
        exit();
    }
}
$_SESSION['message-error'] = 'Gagal Login';
header('../pages/Login_Hekal.php')
?>