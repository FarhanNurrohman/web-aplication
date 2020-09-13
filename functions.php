<?php
$db = mysqli_connect("localhost", "root", "", "data_kelas");

function query($query){
    global $db;
    $rows = [];
    $result = mysqli_query($db ,$query);

    // memasukkan data ke dalam array
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows[0];
}


function tambah($data){
    global $db;

    $nama = $data['nama'];
    $nis = $data['nis'];
    $no_tlp = $data['no_tlp'];

    $gambar = upload($_FILES);

    $query = "INSERT INTO data_siswa(nis, nama, no_tlp, gambar, id_nilai) 
    VALUES ('$nis', '$nama', '$notlp', '$gambar', $id_nilai)";

    mysqli_query($db,$query);
    
    return mysqli_affected_rows($db);
}

// function upload($gambar){
//     if()
// }
?>