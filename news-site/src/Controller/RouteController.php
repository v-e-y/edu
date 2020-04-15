<?php declare(strict_types=1);

class RouteController
{
    public $requestUri;
    public $routes;
    protected $controllerNickname = 'c';
    protected $actionNickname = 'a';
    protected $oneItem = 'id';

    function __construct(array $request)
    {
        $this->requestUri = $request;
    }

    public function getRequestUri()
    {
        /*
        foreach ($this->requestUri as $key => $value) {
            $this->requestUri[$key] = htmlspecialchars($value);
        }
        */
        return $this->requestUri;
    }

    public function router()
    {
        if (!$this->requestUri) {
            return NewsController::getAllNews();

        } elseif (!$this->isRqtUriContainsConAc($this->requestUri)) {
            // return redirect('404');

        } elseif ($this->requestUri[$this->actionNickname] === 'add') {
            return NewsController::addNews();

        } elseif ($this->isRqtUriContainsConAc($this->requestUri, null, null, true)) {
            return NewsController::getOneNews($this->requestUri);
        }

        /*
        if action add news
        __
        if id of news
        */
    }

    /**
     * Check is uri contains keys controller and action or id for one item
     * @param array $requestUri
     * @param boolean $controller
     * @param boolean $action
     * @param boolean $id
     * @return boolean
     */
    protected function isRqtUriContainsConAc (array $requestUri, bool $controller = null, bool $action = null, bool $id = null):bool
    {
        if (!$controller && !$action && !$id) {
            if (
                array_key_exists($this->controllerNickname, $requestUri) && 
                array_key_exists($this->actionNickname, $requestUri) || 
                array_key_exists($this->oneItem, $requestUri)
                ) {
                    return true;
            }
        }

        if ($controller) {
            return array_key_exists($this->controllerNickname, $requestUri) ? true : false;
        }

        if ($action) {
            return array_key_exists($this->actionNickname, $requestUri) ? true : false;
        }

        if ($id) {
            return array_key_exists($this->oneItem, $requestUri) ? true : false;
        }

        return false;
    }


    /**
     * dev functions
     */

    public function test()
    {
         echo 'hi from Route controller <br>';
    }
}