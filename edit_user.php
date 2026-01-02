<?php
include "koneksi.php";

$id = $_GET['id'];
$user = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM user WHERE id_user=$id"));

if (isset($_POST['update'])) {
    mysqli_query($koneksi, "
        UPDATE user SET
            nama_lengkap='$_POST[nama]',
            email='$_POST[email]',
            username='$_POST[username]',
            password='$_POST[password]'
        WHERE id_user=$id
    ");
    header("Location: dasboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow col-md-6 mx-auto">
        <div class="card-header bg-primary text-white" ><b>Edit User</b>      
        </div>

        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" value="<?= $user['nama_lengkap'] ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" value="<?= $user['username'] ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" value="<?= $user['password'] ?>" class="form-control">
                </div>

                <button name="update" class="btn btn-primary">Update</button>
                <a href="dasboard.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
