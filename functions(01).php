<?php declare(strict_types=1);

$config = require_once './config.php';
// Show errors
$config['errors'];
// Display pretty view
echo '<pre>';


/**
 * Создайте функцию odd(), которая принимает в качестве аргумента целое число 
 * и возвращает true если число не четное и false если четное.
 */

 function odd (int $integerToCheck):bool
 {
    return ($integerToCheck % 2) ? true : false;
 }

echo (odd(5) ? 'true' : 'false') . '<br>';


