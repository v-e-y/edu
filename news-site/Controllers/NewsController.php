<?php declare(strict_types=1);
namespace Controllers;

use \Models\News as News;

class NewsController
{
    // Get news (id=null)
    public static function getNews(int $newsId = null):array
    {
        // if $newsId is empty get all news
        if (!$newsId) {
            
        }
        return [];
    }

    // Add news
}