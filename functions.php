<?php
$db = mysqli_connect("localhost", "root", "", "data_kelas");

function tambah($nis, $nama, $notlp, $gambar){
    global $db;
    $query = "INSERT INTO data_siswa(nis, nama, no_tlp, gamabar) 
    value ($nis, '$nama', '$notlp', '$gambar')";

    mysqli_query($db,$query);

    return mysqli_fetch_rows($db);
}


?>