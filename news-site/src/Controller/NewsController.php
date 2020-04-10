<?php declare(strict_types=1);
namespace src\Controller;

use \src\News as News;

class NewsController
{
    // Get news (id=null)
    public static function getNews(int $newsId = null):array
    {
        // if $newsId is empty get all news
        if (!$newsId) {
            // Return all news
        } elseif ($newsId) {
            // Check and get news with id equal $newsId
        } else {
            // Redirect to 404 page and write log
        }
    }

    // Add news
}