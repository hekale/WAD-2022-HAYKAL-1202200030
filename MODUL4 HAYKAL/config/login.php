<?php
$connection = mysqli_connect("localhost", "root", "", "wad_modul4_hekal", "3306");

    include 'connector.php';
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "SELECT * FROM user_haykal WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        if (isset($_POST["remember"])) {
            $remember = $_POST['remember'];
            setcookie('remember', $remember, time() + 60 * 60 * 24 * 30, '/');
        }
        setcookie('nama', $row['nama'], time() + 60 * 60 * 24 * 30, '/');
        setcookie('email', $row['email'], time() + 60 * 60 * 24 * 30, '/');

            header('Location: ../pages/Home_Hekal.php');
    }else{
        
        echo "<script>alert('Email atau Password Salah')</script>";
        echo "<script>location='../index.php?page=login'</script>";
        
    }

?>