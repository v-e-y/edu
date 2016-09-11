<?php

$imageDir = ROOT . '/img';
// Перевіряємо чи є файл або директорія 'img', далі чи є 'img' саме директорією
// !is_file('img') думав додати це але так як є is_dir('img') то напено не потрібно.
if (file_exists($imageDir) && is_dir($imageDir)) {
    $images = scandir($imageDir);
    // print_r($images);
    if ($images[0] == '.' && $images[1] == '..') {
        unset($images[0]);
        unset($images[1]);
    }
    // print_r($images);
    return $images;
}


// assert(true, file_exists('img'));
// assert(true, is_dir('img'));
