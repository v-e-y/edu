<?php

/*
*
* TODO parse xml, like sitemap.xml.
*
*/

// Конфігурації/Налаштування проекту
$config = require __DIR__ . '/config.php';

// Автозавантаження класів
spl_autoload_register(function ($className) {
    try {
        $config = require __DIR__ . '/config.php';
        require $config['roots']['classesRoot'] . $className . '.php';
    } catch (Exception $e) {
        echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
    }
});



//$test = new ParseXml('http://www.kozhgalantereya.com/sitemap-shop.xml');

//echo $test->getUrl();

$url = 'http://www.kozhgalantereya.com/sitemap-shop.xml';
$contant = simplexml_load_file($url);
//echo $contant->url[0]->loc;
//echo '<pre>';
//print_r($contant);
//strtotime($date);
//strtotime($urlRow->lastmod)


$toJson = json_encode($contant);
$end = json_decode($toJson,TRUE);
echo '<pre>';
//print_r($end);
//echo gettype($contant->url);

foreach ($end as $urlRow) {
    foreach ($urlRow as $key1 => $value) {
        //echo $key1 . '<br>';
        $newArray[$key1] = $value;
        //foreach ($value as $key => $valueEnd) {
         //   echo $key . ' => ' . $valueEnd . '<br>';
        //}
    }
    //echo '<pre>';
    //echo $index . '<hr>';
    //print_r($urlRow);
    //echo '<hr>';
    //print_r(gettype($urlRow));
}
//print_r($newArray[0]['lastmod']);

$myTime = strtotime($newArray[0]['lastmod']);

print_r($myTime);

echo '<hr>';
print_r($newArray);
