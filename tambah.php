<?php
require 'functions.php';

// mengecek apakah button sumbit telah di pencet
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $gambar = $_POST['gambar'];
    $no_tlp = $_POST['no_tlp'];

    echo tambah($nis, $nama, $no_tlp, $gambar);

}





?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <form action="" method="post">
        <table cellspacing="0">
            <tr>
                <th>
                    <h1>Tambah Data Siswa</h1>
                </th>
            </tr>
            <tr>
                <td>
                    <label for="gambar">Foto :</label>
                    <br>
                    <input type="text" id="gambar" name="gambar">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nis">NIS :</label>
                    <br>
                    <input type="text" id="nis" name="nis">
                </td>
            </tr>
            <tr>    
                <td>
                    <label for="nama">Nama :</label>
                    <br>
                    <input type="text" id="nama" name="nama">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="no_tlp">Nomer Telepone :</label>
                    <br>
                    <input type="text" id="no_tlp" name="no_tlp">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit" id="submit">Kirim!!</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>