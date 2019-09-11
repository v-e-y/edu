<?php declare(strict_types=1);

/*
* найти сумму и произведенийе 5 и 7
*/
$a = 5;
$b = 7;
// сумма значений
$amountAB = (int)$a + (int)$b;
// произведение значений
$multiplyAB = (int)$a * (int)$b;
// вывод результатов
echo $amountAB . ", ". $multiplyAB;

echo "\n";

/*
* Найти сумму квадратов чисел 4 и 6
*/
$a = 4;
$b = 6;
// получаем степень числа
function getDegree (int $a):int {
    return $a * $a;
}
// вывод результата задания
echo getDegree($a) + getDegree($b);

echo "\n";

/*
* Среднее арифметическое 3, 5, 8
*/
$a = 3;
$b = 5;
$c = 8;
echo ($a + $b + $c) / 3;

echo "\n";

/*
* x = 2, y = 6, z = 9. Найти (x + 1) 4 - 2 (z - 2x^2 + y^2)
*/
$x = 2;
$y = 6;
$z = 9;
// результат
echo ($x + 1) * 4 - 2 * ($z - 2 * $x * $x + $y * $y);

echo "\n\n";

/*
* Найти всевозможные результаты деления суммы двух из них на ост третье. 
*/
$a = 4;
$b = 8;
$c = 3;

echo $a + $b / $c . "\n";
echo $a + $c / $b . "\n";
echo $c + $a / $a . "\n";

echo "\n\n";

/*
* Найти сумму 40% от 1-го чис. и 84% от 2-го чис.
*/
$a = 17;
$b = 54;
// находим процент
function getPercent (int $i, int $per):float {
    return $i * $per/100;
}
// результат
echo getPercent($a, 40) + getPercent($b, 84);

echo "\n\n";

/*
* Найти сумму цифр трехзначного числа
*/
$a = 379;
function getSumOfInt (int $i):int {
    $toString = (string)$i;
    return $toString[0] + $toString[1] + $toString[2];
}
echo getSumOfInt($a);

echo "\n\n";

/*
* Если 15 > 10 то + 100, если < то -30
*/
$i = 9;
if ($i > 10) {
    $i += 100;
} elseif ($i < 10) {
    $i -=30;
}
echo $i;

echo "\n\n";

/*
* если 8 четное то /2, если нет то *3
*/
$i = 8;

if ($i%2 == 0) {
    $i /= 2;
} else {
    $i *= 3;
}
echo $i;

echo "\n\n";

/*
* Если число > 50 то показать квадрат числа. Если  > 10 и < 30 то = 0 иначе ошибка.
*/
$i = rand(1, 99);

if ($i > 50) {
    echo $i *= $i;
} elseif ($i > 10 && $i < 30) {
    echo 0;
} else {
    echo "Ошибка";
}
