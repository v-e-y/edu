<?php
session_start();

function logOut()
{
    unset($_COOKIE['auch']);
    setcookie('auch', '', time() - 86400);
}

logOut();
header('Location: /index.php');
exit;
