<?php
$db = mysqli_connect("localhost", "root", "", "data-sekolah");

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
    $jurusan = htmlspecialchars($data['jurusan']);
    $email = htmlspecialchars($data['email']);

    $nis = cekAngka($nis);
    $email = cekEmail($email);
    $gambar = upload();
    if($email === true || $gambar === true || $nis === true){
        return false;
    }

    // membuat query input
    // $query1 = ;

    mysqli_query($db,"INSERT INTO siswa (gambar, nis, nama, jurusan, email) VALUES ('$gambar', $nis,'$nama', '$jurusan', '$email')");
    
    return mysqli_affected_rows($db);
}

function upload(){
    $error = $_FILES['gambar']['error'];
    $namaGambar = $_FILES['gambar']['name'];
    $dirGambar = $_FILES['gambar']['tmp_name'];
    $ukuranGambar = $_FILES['gambar']['size'];

    //mengecek apakah ada gambar yang diinputkan
    if($error === 4){
        echo "<script>
            alert('Tidak ada gambar yang anda masukkan');
        </script>";
        return true;
    }

    // menegecek apakah ukuran gambar sesuai
    if($ukuranGambar > 1000000){
        echo "<script>
        alert('ukuran gambar terlalu besar');
    </script>";

    return true;
    }

    $ekstensiVaild = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.',$namaGambar);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    // mengecek apakah yang diinputkan adalah gambar
    if(!in_array($ekstensiGambar, $ekstensiVaild)){
        echo "<script>
            alert('yang anda masukkan bukan gambar');
        </script>";

        return true;
    }

    $namaGambarBaru = uniqid();
    $namaGambarBaru .= "." . $ekstensiGambar;

    $dirGambarBaru = "/opt/lampp/htdocs/myProject/sep-08-2020/img/" . $namaGambarBaru;

    // mengirim gambar ke file yang di inginkan
    move_uploaded_file($dirGambar, $dirGambarBaru);

    return $namaGambarBaru;
}

function cekEmail($email){
    // cek apakah email sudah sesuai
    if(preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', $email)){
        return $email;
    }else{
        echo "<script>
            alert('Email tidak vailid!!')
        </script>";
        return true;
    }
}

function cekAngka($angka){
    if(is_numeric($angka)){
        return $angka;
    }else{
        "<script>
            alert('NIS haruslah angka')
        </script>";
        return true;
    }
}

function hapus($id){
    global $db;
    $query = "DELETE FROM siswa WHERE id = $id";

    //melakukan query hapus
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
?>