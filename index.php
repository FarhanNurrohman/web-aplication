<?php
require 'functions.php';

$data = query("SELECT * FROM siswa ORDER BY nis ASC");


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="">logout</a>

    <h1>Welcome</h1>
    <a href="register.php">Add new user</a> | <a href="tambah.php">Add new student</a>

    <h3>Daftar siswa</h3>
    <form action="" method="post">
        <table border="1" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Action</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Jurusan</th>
                <th>Email</th>
            </tr>
            <?php $i = 1; foreach($data as $siswa): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td>
                    <a href="update.php?id=<?=$siswa['id']?>">Update</a> | <a href="hapus.php?id=<?=$siswa['id']?>" onclick="return confirm('Apakah anda yakin?');">Delete</a>
                </td>
                <td>
                    <img src="img/<?= $siswa['gambar'] ?>" alt="" width="75">
                </td>
                <td><?= $siswa['nama'] ?></td>
                <td><?= $siswa['nis'] ?></td>
                <td><?= $siswa['jurusan'] ?></td>
                <td><?= $siswa['email'] ?></td>
            </tr>
                <?php endforeach; ?>
        </table>
    </form>
</body>
</html>