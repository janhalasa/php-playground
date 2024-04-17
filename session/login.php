<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if (strlen($username) < 5 || strlen($password) < 5) {
    header("Location: login-form.php?error=invalid-credentials");
    die();
}

$_SESSION['username'] = $username;
$_SESSION['role'] = random_int(0, 1) ? 'admin' : 'visitor';

header("Location: private-page.php");
