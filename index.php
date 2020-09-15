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

    <h1>Data kelas</h1>
    <a href="">Add new user</a>
    <br>
    <a href="tambah.php">Add new student</a>

    <form action="" method="post">
        <table border="1" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Action</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>NoTlp</th>
                <th>email</th>
            </tr>
            <?php $i = 1; foreach($data as $siswa): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td>
                    <a href="">Update</a> | <a href="">Delete</a>
                </td>
                <td>
                    <img src="img/<?= $siswa['gambar'] ?>" alt="">
                </td>
                <td><?= $siswa['nama'] ?></td>
                <td><?= $siswa['nis'] ?></td>
                <td><?= $siswa['tel'] ?></td>
                <td><?= $siswa['email'] ?></td>
            </tr>
                <?php endforeach; ?>
        </table>
    </form>
</body>
</html>