<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<?php
if(!isset($_SESSION)){
    session_start();
}
require "../config/connector.php";

$mail = $_POST['email'];
$pass = $_POST['pass'];

$dbuname = "SELECT * FROM users WHERE email='$mail'";
$exe = mysqli_query($db, $dbuname);

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
>>>>>>> 96f8b9350f36ac5c8dcb90097841861ffc82d606
=======
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
>>>>>>> 353e5babd461b148d76809a67a10cee75f5f6ce0
?>