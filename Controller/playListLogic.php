<?php
$app['db']= (new Database())->db;
try {
    $name = $_POST['playlistName'];
    $getplaylist = $app['db']->query("INSERT INTO playList(name)VALUES('$name')");
    $Allplaylist = $getplaylist->fetchAll(PDO::FETCH_OBJ);
//    var_dump($Allplaylist);
    require 'View/userHome.php';
//    require 'View/userHome.php';
}
catch (Exception $e){
die($e->getMessage());
}