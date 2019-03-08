<?php


class Router
{
    private $routes;

    public function __construct()
    {
        $routerPath = ROOT.'/config/routes.php';
        $this->routes = include($routerPath);
    }

    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();
        echo $uri;

        /*print_r($this->routes);
        echo 'Router@run()';*/
    }
}