<?php declare(strict_types=1);
namespace src;


class News extends DB
{
    // Event data
    private $title;
    private $author;
    private $newsText;

    // Get one news

    // Get all news
    public static function getAllNews() :array
    {
        return [];
    }

    // saveOneNews

    // Help methods:
    
    // Is news exist
    public static function isNewsExist(int $newsId) :bool
    {
        // Check is id exist in Db and return result
    }

}
