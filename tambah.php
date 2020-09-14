<?php
require 'functions.php';


// mengecek apakah button sumbit telah di pencet
if(isset($_POST['submit'])){
    
    $respons = tambah($nis, $nama, $no_tlp, $gambar);

    if($respons < 1){
        echo "<script>
            alert('data gagal ditambahkan');
        </script>";
    }else{
        echo "<script>
            alert('data berhasil ditambahkan');
        </script>";
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
    <form action="" method="post" enctype="multipart/form-data">
        <table cellspacing="0">
            <tr>
                <th>
                    <h1>Tambah Data Siswa</h1>
                </th>
            </tr>
            <tr>
                <td>
                    <label for="gambar">Picture :</label>
                    <br>
                    <input type="file" id="gambar" name="gambar">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nis">Stuednt ID :</label>
                    <br>
                    <input type="text" id="nis" name="nis">
                </td>
            </tr>
            <tr>    
                <td>
                    <label for="nama">Name :</label>
                    <br>
                    <input type="text" id="nama" name="nama">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="no_tlp">Phone Number :</label>
                    <br>
                    <input type="text" id="no_tlp" name="no_tlp">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email :</label>
                    <br>
                    <input type="email" id="email" name="email">
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