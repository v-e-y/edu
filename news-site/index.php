<?php declare(strict_types=1);

// dev TODO replace this
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

define('DIR', __DIR__);

require DIR . '\autoload.php';




$rq = new RouteController($_REQUEST);
$n = new NewsController();
$n->test();
$rq->test();
//$rq->router();



/*
if (!$rq->getRequestUri()) {
    echo 'all news';
} else {
    print_r($rq->getRequestUri());
    echo 'this | <br>';
}
*/
/*
if ($_SERVER['REQUEST_URI'] === '/') {
    echo 'index';
} else {
    echo 'not index';
    print_r($_REQUEST);
}
*/



/**
 * Автозавантаженя классів
 * Відображувати всі новини
 * Показати одну новину
 * Додавати новину
 * Реалізувати view
 */
