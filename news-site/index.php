<?php declare(strict_types=1);

//use \src\News as News;

/**
 * Автозавантаженя классів
 * Відображувати всі новони
 * Показати одну новину
 * Додавати новину
 * Реалізувати view
 */

require_once __DIR__ . '\autoload.php';

$rq = new RouteController($_SERVER);
print_r($_REQUEST);
echo '<br>';
if ($rq->getRequestUri() === '/') {
    echo 'all news';
} else {
    var_dump($rq->getRequestUri());
}


/*
if ($_SERVER['REQUEST_URI'] === '/') {
    echo 'index';
} else {
    echo 'not index';
    print_r($_REQUEST);
}
*/