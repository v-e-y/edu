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

//-------------------------------------------------------------------//

/*
* Read json file with generator
*/

$file = new SplFileObject($_SERVER['DOCUMENT_ROOT'] . '/data/example.json');

function freadGen(SplFileObject $file): Iterator
{
    while (!$file->eof()) {
        yield $file->fgets();
    }
}

foreach (freadGen($file) as $value) {
    echo $value;
}

//-------------------------------------------------------------------//

/**
 * Read rss and create collection of items
*/

$rssUrl = 'https://www.pravda.com.ua/rss/view_pubs/';

$rssXml = new SimpleXMLElement($rssUrl, 0, true);

function getRSSItemGen(SimpleXMLElement $rss): Iterator
{
    if ($rss->channel->item) {
        foreach ($rss->channel->item as $item) {
            yield $item;
        }
    }
}

$rssCollection = new SplDoublyLinkedList();

foreach (getRSSItemGen($rssXml) as $item) {
    
    $rssCollection->push($item);
}

var_dump($rssCollection);

//-------------------------------------------------------------------//
