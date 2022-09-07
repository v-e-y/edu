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


/**
 * Создайте функцию sum(), которая принимает любое количество числовых аргументов и возвращает их сумму.
 */
function sum (...$sumOfValues)
{
   $theSumOfValues = 0;
   foreach ($sumOfValues as $value) {
      // if the value not an integer or float numb skip him
      if (!is_float($value) && !is_int($value)) {
         continue;
      }
      $theSumOfValues += $value;
   }
   return $theSumOfValues;
}

echo sum(2.5, 6, 5, 4.2);