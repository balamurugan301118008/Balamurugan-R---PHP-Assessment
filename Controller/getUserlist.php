<?php
$app['db']= (new Database())->db;
try {
    $getUser = $app['db']->query("SELECT * FROM users where is_admin = 0");
    $users = $getUser->fetchAll(PDO::FETCH_OBJ);
//    var_dump($users);
    require 'View/adminDashboared.php';
}
catch (Exception $e){
    die($e->getMessage());
}