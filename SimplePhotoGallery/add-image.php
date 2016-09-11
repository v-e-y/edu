<?php
require_once 'show-errors.php';
require_once 'settings/config.php';

// assert(true, $_FILES);

// TODO Додати перевірку на існування /img/
// TODO Додати перевірку на існування прав на /img/
// TODO Додати перевірку на розширення (формат) файлу
// TODO Додати перевірку на розмір файлу
// TODO Реалізувати системні імена
// TODO Додати сесії та повідомлення про помилки або успіх
if (isset($_FILES)) {
    // Папка до якої завантажуємо зображення
    $uploaddir = ROOT . '/img/';
    // імʼя файлу користувача
    $fileName = $_FILES['add-image']['name'];
    // Шлях + імʼя
    $uploadfile = $uploaddir . $fileName;
    // імʼя файлу яке йому присвоїла сервер
    $fileTmpName = $_FILES['add-image']['tmp_name'];
    // завантажуємо файл до /img/
    move_uploaded_file($fileTmpName, $uploadfile);
} else {
    echo 'some error';
}


header('Location: /index.php');
exit;
