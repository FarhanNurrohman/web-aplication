<?php
require 'functions.php';

$data = regist($_POST);



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah user</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="username">Username :</label>
                    <br>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password :</label>
                    <br>
                    <input type="text" name="password" id="password">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password2">verifikasi password :</label>
                    <br>
                    <input type="text" name="password2" id="password2">
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