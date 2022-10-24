<?php

declare(strict_types=1);

echo '<pre>';
/*
$arr = [
    0,
    2,
    3,
    3,
    2,
    5,
    0,
];

$res = array_filter(array_count_values($arr), function($item) {
    return $item;
});
var_dump($res);

function findIt(array &$seq): int
{
    return 1;
}

var_dump(findIt($arr));
*/

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();