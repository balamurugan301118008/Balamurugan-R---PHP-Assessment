<?php


namespace Core\Middleware;
class AuthMiddleware
{
    public function handle()
    {
        if(isset($_SESSION['login'])){
            header('location:/');
        }
    }
}