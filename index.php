<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

require 'connections.php';
require 'router.php';
session_start();
$app = [];
$app['db']= (new Database())->db;

$router = new Router();

$router->get('/','Controller/signUp.php');
$router->get('/loginPage','Controller/loginPage.php');
$router->post('/login_logic','Controller/login_logic.php');
$router->get('/AddSongs','Controller/addSongs.php');
$router->post('/addSongLogic','Controller/addSongLogic.php');
$router->get('/addArtists','Controller/addArtists.php');
$router->post('/addArtistLogic','Controller/addArtistLogic.php');
$router->get('/songList','Controller/songList.php');
$router->get('/createPlaylists','Controller/createPlaylists.php');
$router->get('/allUsers','Controller/getUserlist.php');
$router->post('/playListLogic','Controller/playListLogic.php');

require $router->CheckingURI();