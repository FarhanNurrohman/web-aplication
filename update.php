<?php
session_start();
require 'functions.php';

if(!isset($_SESSION['log'])){
    header("Location: login.php");
    exit;
}

// ambil data siswa
$id = $_GET['id'];
$siswa = query("SELECT * FROM siswa WHERE id = $id")[0];

if(isset($_POST['submit'])){
    $respons =  update($_POST);

    //memberikan pesan
    if($respons < 1){
        echo "<script>
            alert('data gagal dubah');
            document.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>
            alert('data berhasil dubah');
            document.location.href = 'index.php';
        </script>";
    }
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit Data siswa</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <input type="hidden" name="id" value="<?=$siswa['id']?>">
    <input type="hidden" name="gambarLama" value="<?=$siswa['gambar']?>">
        <table cellspacing="0">
            <tr>
                <th>
                    <h1>Edit Data Siswa</h1>
                </th>
            </tr>
            <tr>
                <td>
                    <label for="gambar">gambar :</label>
                    <br>
                    <img src="img/<?=$siswa['gambar']?>" alt="" width='75'>
                    <input type="file" id="gambar" name="gambar">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nis">NIS :</label>
                    <br>
                    <input type="text" id="nis" name="nis" required maxlength="6" value='<?=$siswa['nis']?>'>
                </td>
            </tr>
            <tr>    
                <td>
                    <label for="nama">Nama :</label>
                    <br>
                    <input type="text" id="nama" name="nama" required value='<?=$siswa['nama']?>'>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jurusan">jurusan :</label>
                    <br>
                    <input type="text" id="jurusan" name="jurusan" required value='<?=$siswa['jurusan']?>' >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email :</label>
                    <br>
                    <input type="text" id="email" name="email" required value='<?=$siswa['email']?>'>
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