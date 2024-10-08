<?php
namespace App;

class Router{ // 2nd
    protected $routes = [];

    private function addRoutes($route, $controller, $action, $method){
        $this->routes[$method][$route] = ["controller" => $controller,"action"=> $action];
    }

    public function get($route, $controller, $action){
        $this->addRoutes($route, $controller, $action, "GET");
    }

    public function post($route, $controller, $action){
        $this->addRoutes($route, $controller, $action, "POST");
    }

    public function dispatch(){
        $uri = strtok($_SERVER["REQUEST_URI"], "?");
        $method = $_SERVER["REQUEST_METHOD"];

        if(array_key_exists($uri, $this->routes[$method])){
            $controller = $this->routes[$method][$uri]['controller'];
            $action = $this->routes[$method][$uri]["action"];

            $controller = new $controller();
            $controller->$action();
        }else{
            include '404notfound.html'; // to make
        }
    }
}