<?php
require 'functions.php';



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="">logout</a>

    <h1>Admin Page</h1>
    <a href="">Tambah User</a>
    <br>

    <a href="tambah.php">Tambah siswa</a>
    <form action="" method="post">
        <table border="1" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Action</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>NoTlp</th>
                <th>Nilai siswa</th>
            </tr>
            <tr>
                <td><?= 1 ."." ?></td>
                <td>
                    <a href="">Delete</a>
                    |
                    <a href="">Update</a>
                </td>
                <td><img src="img/<?= "waaw" ?>" alt=""></td>
                <td></td>
                <td></td>
                <td><a href=""></a></td>

            </tr>
        </table>
    </form>
</body>
</html>