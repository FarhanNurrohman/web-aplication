<?php
require 'functions.php';

if(isset($_POST['submit'])){
    $respon = regist($_POST);

    if($respon < 1){
        echo "<script>
            alert('User baru gagal ditambahkan');
            document.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>
            alert('User baru gagal ditambahkan');
            document.location.href = 'index.php';
        </script>";
    }
}



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah user</h1>
    <form action="" method="post" autocomplete="off">
        <table>
            <tr>
                <td>
                    <label for="username">Username :</label>
                    <br>
                    <input type="text" name="username" id="username" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password :</label>
                    <br>
                    <input type="password" name="password" id="password" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password2">verifikasi password :</label>
                    <br>
                    <input type="password" name="password2" id="password2" required>
                </td>
            </tr>
            <tr>
                <td>
                    <button name="submit">Kirim!!</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>