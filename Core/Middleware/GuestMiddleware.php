<?php

namespace Core\Middleware;
class GuestMiddleware
{
    public function handle()
    {
        if(!isset($_SESSION['login'])){
            header('location:/registration');
        }
    }
}