<?php

$host = "localhost";
$username = "root";
$password = ""; 
$kiyafet_db = "kiyafetdb";
$admin_db = "adminlerdb";

$conn = mysqli_connect($host, $username, $password, $kiyafet_db);
if (!$conn) {
    die("Kıyafet DB Bağlantı Hatası: " . mysqli_connect_error());
}

$admin_conn = mysqli_connect($host, $username, $password, $admin_db);
if (!$admin_conn) {
    die("Admin DB Bağlantı Hatası: " . mysqli_connect_error());
}
?>
