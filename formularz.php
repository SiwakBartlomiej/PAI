<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1 Siwak Bartlomiej</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="login" placeholder="Login">
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <button type="submit">Send</button>
    </form>
</body>
</html>

<?php
    $login = "123";
    $password = "123";
    session_start();

    if(!empty($_POST)) {
        if($_POST['login'] == $login && $_POST['password'] == $password) {
            $_SESSION['auhtorized'] = true;
            header("Location: tekst.php");
            exit();
        }
        else{
            $_SESSION['auhtorized'] = false;
            echo "Incorrect credentials";
        }
    }
?>