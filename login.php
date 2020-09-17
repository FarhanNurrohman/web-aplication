<?php
session_start();
require 'functions.php';

if(isset($_SESSION['log'])){
    header("Location : index.php");
    exit;
}

if(isset($_POST["login"])){
    $username = $_POST['username'];
    $password =  $_POST['password']; 

    $result = mysqli_query($db, "SELECT password FROM users WHERE username = '$username'");

    if($data = mysqli_fetch_assoc($result)){
        if(password_verify($password, $data['password'])){
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
        <p>Username/Password salah</p>
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
                    <button name="login">Login</button>
                </td>
            </tr>
        </table>
    </form>    
</body>
</html>

