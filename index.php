<?php

require 'connections.php';
require 'Core/router.php';
session_start();
$app = [];
$app['db']= (new Database())->db;

$router = new Core\Router();

$router->get('/','Controllers/home.php')->only('auth');
$router->get('/registration','Controllers/Registration/Registration.php')->only('guest');
$router->get('/register','Controllers/Registration/register.php')->only('guest');
$router->get('/login','Controllers/Login/login.php')->only('guest');
$router->get('/login_logic','Controllers/Login/login_logics.php')->only('guest');
$router->get('/logout','Controllers/Logout/logout.php')->only('auth');
$router->get('/addSongs','Controllers/addSongs.php');
$router->post('/songsLogic','Controllers/songLogic.php');
$router->get('/addUser','Controllers/addUser.php');
$router->post('/userLogic','Controllers/userLogic.php');
$router->get('/addArtist','Controllers/artist.php');
$router->get('/Alluser','Controllers/allUsers.php');
$router->post('/updatePremium','Controllers/updatePremiumUser.php');

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

require $router->CheckingURI();