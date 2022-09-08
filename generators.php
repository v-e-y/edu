<?php

declare(strict_types=1);
/*
* Just practice

$intArr = range(0, 27);
$stringArr = ['test', 'string', 'array'];
$resArr = array_merge($intArr, $stringArr);
function collect(iterable $arr, callable $callback): Iterator // Generator
{
    foreach ($arr as $value) {
        if ($callback($value)) {
            yield $callback($value);
        }
    }
}
$res = collect($resArr, function($i) {
    if (getType($i) === 'integer' && $i % 2 === 0) {
        return 'item - ' . $i;
    }
});
foreach ($res as $value) {
    echo $value;
    echo 
*/

/*
* Reed json file with generator
*/

$file = new SplFileObject($_SERVER['DOCUMENT_ROOT'] . '/data/example.json');

function freed(SplFileObject $file): Iterator
{
    while (!$file->eof()) {
        yield $file->fgets();
    }
}

foreach (freed($file) as $value) {
    echo $value;
}


