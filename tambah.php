<?php
session_start();
require 'functions.php';

if(!isset($_SESSION['log'])){
    header("Location: login.php");
    exit;
}

// mengecek apakah button sumbit telah di pencet
if(isset($_POST['submit'])){

    $respon = tambah($_POST);
    // cek apakah data berhasil diinputkan
    if($respon < 1){
        echo "<script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <table cellspacing="0">
            <tr>
                <th>
                    <h1>Tambah Data Siswa</h1>
                </th>
            </tr>
            <tr>
                <td>
                    <label for="gambar">gambar :</label>
                    <br>
                    <input type="file" id="gambar" name="gambar">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nis">NIS :</label>
                    <br>
                    <input type="text" id="nis" name="nis" required maxlength="6">
                </td>
            </tr>
            <tr>    
                <td>
                    <label for="nama">Nama :</label>
                    <br>
                    <input type="text" id="nama" name="nama" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jurusan">jurusan :</label>
                    <br>
                    <input type="text" id="jurusan" name="jurusan" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email :</label>
                    <br>
                    <input type="text" id="email" name="email" required>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit" id="submit">Send!!</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>