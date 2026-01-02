<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi,"INSERT INTO user VALUES(NULL, '$nama_lengkap', '$email', '$username', '$password')");

    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrasi</title>
</head>
<body>
    <div class="wrapper">
        <form action="" method="POST">
            <h1>Registrasi</h1>
            <div class="input-box">
                <input type="text" name="nama_lengkap" placeholder="Nama Lengkap">
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password">
            </div>
            <button class="btn" name="register" >Register</button>
            <div class="login-link">
                <p>Sudah Punya Akun? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>