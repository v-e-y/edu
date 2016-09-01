<?php
session_start();

// Перевіряємо наявність вказаного користувачеем логіну та паролю.
// Якщо є повертаємо true.
function checkLoginPasword($userLogin, $userPassword)
{
    $users = ['Ed' => '123456', 'Misha' => '654321'];
    return isset($users[$userLogin]) && $users[$userLogin] == $userPassword;
}

// Встанювлюємо куку з логіном
function auch($login)
{
    setcookie('auch', $login, time() + 86400);
}

// assert(true, checkLoginPasword('Ed', '123456'));

// Перевіряємо вхідні данні
// Встановлюємо куку
if (isset($_POST['name']) && isset($_POST['password'])) {
    // TODO upper & lower
    $userLogin = trim($_POST['name']);
    $userPassword = trim($_POST['password']);

    if (checkLoginPasword($userLogin, $userPassword)) {
        auch($userLogin);
    } 
}

header('Location: /index.php');
exit();


?>

