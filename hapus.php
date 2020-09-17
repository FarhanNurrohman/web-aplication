<?php
session_start();
require 'functions.php';

if(!isset($_SESSION['log'])){
    header("Location: login.php");
    exit;
}

$id= $_GET['id'];
$respons= hapus($id);

if($respons < 1){
    echo "<script>
        alert('Data gagal di hapus');
        document.location.href = 'index.php';
    </script>";
}else{
    echo "<script>
        alert('Data berhasil di hapus');
        document.location.href = 'index.php';
    </script>";
}



?>