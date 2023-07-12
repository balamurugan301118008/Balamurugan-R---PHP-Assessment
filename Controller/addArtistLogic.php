<?php
$app['db']= (new Database())->db;

try {
    $artistaName = $_POST['artistName'];
    $insertSongDetails = $app['db']->query("INSERT INTO artists (name)VALUES('$artistaName')");
//    header('location:/');
    $fethArtist = $app['db']->query("SELECT * FROM artists");
    $artists = $fethArtist->fetchAll(PDO::FETCH_OBJ);

    require 'View/adminDashboared.php';
}

catch (Exception $e){
    die($e->getMessage());
}