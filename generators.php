<?php

declare(strict_types=1);

$intArr = range(0, 15);
$stringArr = ['test', 'string', 'array'];

$resArr = array_merge($intArr, $stringArr);

function collect(iterable $arr, callable $callback): Iterator
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
    echo '<br>';
}
