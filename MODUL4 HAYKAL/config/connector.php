<?php
$connection = new mysqli("localhost", "root", "", "wad_modul4_hekal");

if (!$connection) {
    die("Koneksi Error: " . $connection->connect_error);}
?>
