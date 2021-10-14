<?php declare(strict_types=1);
echo '<pre>';
/*
* Task: 1.
* Пусть имеется масив ['fst', 'snd', 'thd', 'fth']. Выведите случайный элемент массива.
*/
function getArrRandVal (array $arr)
{
    return $arr[array_rand($arr)];
}

echo getArrRandVal(['fst', 'snd', 'thd', 'fth']) . '<br>';

/*
* Task: 2.
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
* Task: 3.
* Пусть имеется массив ['fst', 'snd', 'thd', 'fth', 'snd', 'thd', 'gt'], 
* получите из него новый массив содержащий только уникальные значения.
*/
function getUniqValFromArr (array $arr):array
{
    return array_unique($arr);
}

print_r(getUniqValFromArr(['fst', 'snd', 'thd', 'fth', 'snd', 'thd', 'gt']));


