<?php
session_start();
require 'functions.php';

if(isset($_SESSION['log'])){
    echo "<script>
        document.location.href = 'index.php';
    </script>";
}

if(isset($_COOKIE['key']) && isset($_COOKIE['value'])){
    $id = $_COOKIE['key'];
    $user = $_COOKIE['value'];

    $result = mysqli_query($db, "SELECT username FROM users WHERE id = $id");
    $data = mysqli_fetch_assoc($result);
    if($user == hash("whirlpool", $data['username'])){
        $_SESSION['log'] = true;
    }
}


if(isset($_POST["login"])){
    $username = $_POST['username'];
    $password =  $_POST['password']; 

    $result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");

    if($data = mysqli_fetch_assoc($result)){
        if(password_verify($password, $data['password'])){
            if(isset($_POST['remamber'])){
                // set cookie
                setcookie('key', $data['id'], time()+60*60*12);
                setcookie('value', hash("whirlpool", $data['username']), time()+60*60*12);
            }

            // set session
            $_SESSION['log'] = true;
            echo "<script>
                document.location.href = 'index.php'
            </script>";
        }else{
            $error = true;
        }

    }else{
        $error = true;
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
    <h1>Login</h1>

    <?php if(isset($error)): ?>
        <p style="color:red; font-style:italic;">Username/Password salah</p>
    <?php endif; ?>
    <form action="" method="post" autocomplete="off">
        <table>
            <tr>
                <td>
                    <label for="username">Username :</label>
                    <br>
                    <input type="text" id="username" name="username" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password :</label>
                    <br>
                    <input type="password" id="password" name="password" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="remamber" id="remamber">
                    <label for="remamber">Remamber me</label>
                </td>
            </tr>
            <tr>
                <td>
                    <button name="login">Login</button>
                </td>
            </tr>
        </table>
    </form>    
</body>
</html>

