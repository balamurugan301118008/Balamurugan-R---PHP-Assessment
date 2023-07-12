<?php


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
                return $route['controller'];
            }
        }
    }
}