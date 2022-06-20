<?php

$username = 'user';
$password = '123456';

session_start();
$user = $_POST['username'];
$pass = $_POST['password'];

if ($user==$username && $pass==$password) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: home.php");
} else {
    header("Location: login.php");
}
?>