<?php
    $app['db']= (new Database())->db;
    $userName = $_POST['Username'];
    $isAdmin = 1;
    $fetchUserDetails = $app['db']->query("SELECT * FROM users");
    $fetchData = $fetchUserDetails->fetch(PDO::FETCH_OBJ);

    if($fetchData->user_name == $userName && $fetchData->is_admin ==  $isAdmin ){
        $fetchUsers =  $app['db']->query("SELECT * FROM users where is_admin = 0");
        $users = $fetchUsers->fetchAll(PDO::FETCH_OBJ);
        require 'View/adminDashboared.php';
    }
    else{
        require 'View/userHome.php';
    }
