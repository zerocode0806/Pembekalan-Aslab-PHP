<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    mysqli_query($koneksi, "
        INSERT INTO user (nama_lengkap, email, username, password)
        VALUES (
            '$_POST[nama]',
            '$_POST[email]',
            '$_POST[username]',
            '$_POST[password]'
        )
    ");
    header("Location: dasboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow col-md-6 mx-auto">
        <div class="card-header bg-primary text-white">
            Tambah User
        </div>

        <div class="card-body"> 
            <form method="POST">
                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" required>
                </div>

                <button name="simpan" class="btn btn-primary">Simpan</button>
                <a href="dasboard.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
