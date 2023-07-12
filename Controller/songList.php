<?php
$app['db']= (new Database())->db;
try {
    $getSongs = $app['db']->query("SELECT * FROM songs");
    $songs = $getSongs->fetchAll(PDO::FETCH_OBJ);
//    var_dump($users);
    require 'View/userHome.php';
}
catch (Exception $e){
    die($e->getMessage());
}