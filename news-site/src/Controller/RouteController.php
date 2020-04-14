<?php declare(strict_types=1);

class RouteController
{
    public string $requestUri;
    public array $routes;



    function __construct(array $request)
    {
        $this->requestUri = $request['REQUEST_URI'];

    }

    public function getRequestUri():string
    {
        return $this->requestUri;
    }

    public function router()
    {
        if ($this->requestUri === '/') {

        } 

        if ($this->requestUri === 'add-news') {
            
        }
        if ($this->requestUri ===) {
            # code...
        }
    }
}