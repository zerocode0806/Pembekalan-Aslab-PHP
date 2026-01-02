<?php
$localhoat= 'localhost';
$user = 'root';
$password = '';
$database = 'belajar_db';

$koneksi = mysqli_connect($localhoat, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>