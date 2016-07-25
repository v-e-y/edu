<?php
// Отримауэмо максимально можливе випадкове число та відразу робимо з нього масив
$randomIntegersArr = str_split(getrandmax());

// Змінюємо тип значень в масиві на число
foreach ($randomIntegersArr as $key => $integer) {
    $arrWithRandInt[] = (int)$integer;
}

//$sortInts = arsort($arrWithRandInt);
// Ще раз прочитати чому не пише у змінну
arsort($arrWithRandInt);

//var_dump($arrWithRandInt);
print_r($arrWithRandInt);
 
?>
