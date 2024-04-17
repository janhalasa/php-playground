<?php
session_start();

if (! array_key_exists('username', $_SESSION) || !$_SESSION['username']) {
    header("Location: login-form.php?error=access-denied");
    die();
}