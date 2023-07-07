<?php

try{
    $id = $_POST['updatepremium'];
    $updateUser = $app['db']->query("UPDATE users SET is_premium = 1; where id ='$id' ");
    header("location:/");
}
catch (Exception $e){
    die($e->getMessage());
}