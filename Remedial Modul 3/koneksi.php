<?
$server = "localhost:8080";
$username = "root";
$password = "";
$database = "dbmhs";

mysql_connect($server,$username,$password) or die ("koneksi gagal");
mysql_select_db ($database) or die ("Database tidak ditemukan");
?>
