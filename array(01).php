<?php declare(strict_types=1);

$config = require_once __DIR__ . '/config.php';
// Show errors
// FIXME Probably should be implemented differently
$config['errors'];

// Show cod better for view
echo '<pre>';


/*
* Пусть имеется масив ['fst', 'snd', 'thd', 'fth']. Выведите случайный элемент массива.
*/
function getArrRandVal (array $arr)
{
    return $arr[array_rand($arr)];
}

echo getArrRandVal(['fst', 'snd', 'thd', 'fth']) . '<br>';


/*
* Пусть имеется массив ['fst' => 1, 'snd' => 2, 'thd' => 3, 'fth' => 4]. 
* Получите на основании его новый массив с ключами его элементов ['fst', 'snd', 'thd', 'fth'].
*/
function getArrFromKeysOfArr (array $arr):array
{
    return array_keys($arr);
}

print_r(getArrFromKeysOfArr(['fst' => 1, 'snd' => 2, 'thd' => 3, 'fth' => 4]));
echo '<br>';


/*
* Пусть имеется массив ['fst', 'snd', 'thd', 'fth', 'snd', 'thd', 'gt'], 
* получите из него новый массив содержащий только уникальные значения.
*/
function getUniqValFromArr (array $arr):array
{
    return array_unique($arr);
}

print_r(getUniqValFromArr(['fst', 'snd', 'thd', 'fth', 'snd', 'thd', 'gt']));


/*
* Решите задачу обмена значений двух целочисленных переменных не прибегая 
* к конструкции list() и использованию третьей промежуточной переменной.
*/
$intOne = 3;
$intTwo = 4;

$intOne += $intTwo; // 3 + 4 = 7
$intTwo = $intOne - $intTwo; // 7 - 4 = 3
$intOne -= $intTwo; // 7 - 3 = 4

echo '<br>' . $intOne . ' ' . $intTwo . '<br>';

/*
* Создайте массив со случайным количеством элементов от 5 до 10.
* Элементы содержат значения от 0 до 100. Отсортируйте от меньшего к большему.
*/
function getRandArrLengthRandVal ():array
{
    $arr = [];
    for ($i = 0; $i < random_int(5, 10); $i++) { 
        $arr[] += random_int(0, 100);
    }
    
    if (count($arr) > 10 || count($arr) < 5) {
        // FIXME: find how return something else then what I specified in the data type which should return the function
        return []; // TODO: should return warning
    }
    return $arr;
}

print_r(getRandArrLengthRandVal());

/*
* Создайте текстовый файл с названиями месяцев. 
* Создайте массив с названиями месяцев из содержимого текстового файла.
*/
function getArrFrDataInFile ($filePath):array
{
    // is file a file
    if (!is_file($filePath)) {
        return ['Error: Given file is not a file'];
    }
    $arr = file($filePath);

    return (!count($arr)) ? ['Error: Some fail with file data'] : $arr;
}

print_r(getArrFrDataInFile($config['data'] . '/month.txt'));





