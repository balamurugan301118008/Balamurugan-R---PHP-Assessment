<?php
$name = $_POST['UserName'];
$id = $_POST['id'];
$premium = $_POST['premium'];
try{
    $statement = $app['db']->query("INSERT INTO users (admin_id,user_name,is_premium)VALUES('$id','$name','$premium')");

    $fetchUser = $app['db']->query("SELECT * FROM users where is_premium = 0");
    $users = $fetchUser->fetchAll(PDO::FETCH_OBJ);

    $fetchPremiumUser = $app['db']->query("SELECT * FROM users where is_premium =1");
    $premiumUsers = $fetchPremiumUser->fetchAll(PDO::FETCH_OBJ);
    require 'Views/view.home.php';
//    header("location:/");
}
catch (Exception $e){
    die($e->getMessage());
}