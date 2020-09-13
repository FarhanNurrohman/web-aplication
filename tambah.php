<?php
require "funsctions.php";

// mengecek apakah button sumbit telah di pencet
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $gambar = $_POST['gambar'];
    $no_tlp = $_POST['no_tlp'];
    tambah($nis, $nama, $no_tlp, $gambar);

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
        <table>
            <tr>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>