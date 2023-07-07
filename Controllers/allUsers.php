<?php

$fetchAllUser = $app['db']->query("SELECT * FROM users");
$AllUsers = $fetchAllUser->fetchAll(PDO::FETCH_OBJ);
require 'Views/view.allUsers.php';