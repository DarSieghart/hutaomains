<?php

include_once "../db/connection.php";

$email = strip_tags($_POST['email']);
$user = $connection->query("SELECT * FROM users WHERE email = '$email'")->fetch_assoc();

if (isset($user)) {
    session_start();
    $_SESSION['error'] = "El usuario existe";
    return header("Location: http://localhost/HuTaoMains/singup.php");
}

$name = strip_tags($_POST['name']);
$password = strip_tags($_POST['password']);

$result = $connection->query("INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')");

if ($result) {
    $user = $connection->query("SELECT * FROM users WHERE email = '$email'")->fetch_assoc();

    session_start();
    $_SESSION['user'] = ["auth" => true, "user" => $user];
    return header("Location: http://localhost/HuTaoMains/index.php");
}


session_start();
$_SESSION['error'] = "No se pudo realizar la operacion";
return header("Location: http://localhost/HuTaoMains/singup.php");