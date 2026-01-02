<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['login'])) {
    header("loction: login.php");
} 
 
$query = mysqli_query($koneksi,"SELECT * FROM user")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<bod class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white d-flex justify-content-between">
                <span>Tabel Peserta</span>
                <a href="logout.php" class="btn btn sm btn-light">logout</a>
            </div>

            <div class="card-body">

                <a href="tambah_user.php" class="btn btn-success mb-3"> + Tambah User</a>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-moddle">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; while($row = mysqli_fetch_assoc($query)) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row['nama_lengkap'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td>
                                    <a href="edit_user.php?id=<?= $row['id_user'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapus_user.php?id=<?= $row['id_user'] ?>" 
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Hapus user?')">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                        </tbody>


                    </table>
                </div>

            </div>
        </div>
    </div>
</bod>
</html>
