<?php

include_once "../db/connection.php";

$email = strip_tags($_POST['email']);

$user = $connection->query("SELECT * FROM users WHERE email = '$email'")->fetch_assoc();

if (!isset($user)) {
    session_start();
    $_SESSION['error'] = "Usuario no encontrado";
    return header("Location: http://localhost/HuTaoMains/login.php");
}

if ($user['password'] != strip_tags($_POST['password'])) {
    session_start();
    $_SESSION['error'] = "Contraseña incorrecta";
    return header("Location: http://localhost/HuTaoMains/login.php");
}

session_start();
$_SESSION['user'] = ["auth" => true, "user" => $user];
return header("Location: http://localhost/HuTaoMains/index.php");