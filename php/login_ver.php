<?php

$array_usernames = array(
    md5("fred"),
    md5("miguel"),
    md5("jubs")
);

$array_passwords = array(
    md5("123456")
);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = md5(strtolower(trim($_POST['username'])));
    $password = md5(strtolower(trim($_POST['password'])));
    if (in_array($username, $array_usernames)) {
        if (in_array($password, $array_passwords)) {
            header("Location: main_page.php");
            exit();
        } else {
            echo "Senha ou email inválidos";
        }
    } else {
        echo "Username inválido";
    }
}