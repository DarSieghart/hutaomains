<?php
session_start();

if (!isset($_SESSION['user'])) {
    return header("Location: http://localhost/HuTaoMains/index.php");
}

unset($_SESSION['user']);

return header("Location: http://localhost/HuTaoMains/login.php");