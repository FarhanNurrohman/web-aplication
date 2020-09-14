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

    return $rows;
}


function tambah($data){
    global $db;

    $nama = htmlspecialchars($data['nama']);
    $nis = htmlspecialchars($data['nis']);
    $no_tlp = htmlspecialchars($data['no_tlp']);

    $gambar = upload();
    // memberikan pesan jika gambar belum di inputkan
    if($gambar <= 0){
        echo "<script>
            alert('Tidak ada gambar');
        </script>";
        return false;
    }

    $query = "INSERT INTO data_siswa() 
    VALUES ()";

    mysqli_query($db,$query);
    
    return mysqli_affected_rows($db);
}

function upload(){
    $error = $_FILES['gambar']['error'];
    $nama = $_FILES['gambar']['name'];

    if($error === 4){
        return false;
    }
}
?>