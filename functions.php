<?php
$db = mysqli_connect("localhost", "root", "", "data_kelas");

function tambah($nis, $nama, $notlp, $gambar){
    global $db;

    $query = "INSERT INTO data_siswa(nis, nama, no_tlp, gambar, id_nilai) 
    VALUES ('$nis', '$nama', '$notlp', '$gambar', $id_nilai)";

    mysqli_query($db,$query);

    echo mysqli_error($db);
    
    return mysqli_affected_rows($db);
}


?>