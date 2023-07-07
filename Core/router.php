<?php
namespace Core;
class Router
{
    public  $routes = [];

    public function only($middleware)
    {
        $this->routes[count($this->routes)-1]['middleware'] = $middleware;
    }
    public function get($uri,$controller)
    {
        $this->routes[] = [
            'uri'=>$uri,
            'controller'=>$controller,
            'method'=>'GET',
            'middleware'=> null
        ];
        return $this;
    }
    public  function post($uri,$controller)
    {
        $this->routes[] = [
            'uri'=>$uri,
            'controller'=>$controller,
            'method'=>'POST',
            'middleware'=> null
        ];
        return $this;
    }
    public function CheckingURI()
    {
        foreach($this->routes as $route){
            if($route['uri']===$_SERVER['REQUEST_URI']){
                if($route['middleware'] === 'auth'){
                    (new AuthMiddleware())->handle();
                }
                if($route['middleware'] === 'guest'){
                    (new GuestMiddleware())->handle();
                }
                return $route['controller'];
            }
        }
        exit();
    }
}

class AuthMiddleware
{
    public function handle()
    {
        if(!isset($_SESSION['login'])){
            header('location:/registration');
        }
    }
}

class GuestMiddleware
{
    public function handle()
    {
        if(isset($_SESSION['login'])){
            header('location:/');
        }
    }
}