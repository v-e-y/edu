<?php
declare(strict_types = 1);

/**
 * 
 */
class ParseXml
{
    
    private $urlToXmlFile;
    
    function __construct($urlWithXmlFile)
    {
        // Проводимо валідацію посилання, перед чим прибераемо пробіли.  
        if (filter_var(trim($urlWithXmlFile), FILTER_VALIDATE_URL)){
            $this->urlToXmlFile = $urlWithXmlFile;
        }
        if (get_headers($this->urlToXmlFile, 1)) {
            $httpStatus = get_headers($this->urlToXmlFile, 1);
            if (strpos($httpStatus[0], '200')) {
                $this->urlToXmlFile = $urlWithXmlFile;
            } else {
                $this->urlToXmlFile = 'http://www.kozhgalantereya.com/sitemap-shop.xml';
            }
        }
    }

    /*
    * Отримуємо xml об`єкт
    * return data or false
    */
    private function getContantFromUrl()
    {
        try {
            $xmlContant = simplexml_load_file($this->urlToXmlFile);
        } catch (Exception $e) {
            echo 'Выброшено исключение (simplexml_load_file): ',  $e->getMessage(), "\n";
        }
        
        return $xmlContant;
    }

    private function xmlToArray(): array
    {   
        try {
            $arrayWithData = json_decode(json_encode($this->getContantFromUrl()), TRUE);
            foreach ($arrayWithData as $value) {
                foreach ($value as $key => $endArray) {
                    $endArray['lastmod'] = strtotime($endArray['lastmod']);
                    $doneArray[$key] = $endArray;
                }
            }
        } catch (Exception $e) {
            echo 'Выброшено исключение (xmlToArray): ',  $e->getMessage(), "\n";
        }

        return $doneArray;
    }

    private function sortArray(): array
    {
        $arraToSort = $this->xmlToArray();
    }

    public function showSortedArray()
    {
        //
    }

}