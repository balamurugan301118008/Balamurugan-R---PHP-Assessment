<?php
try{
    $songName = $_POST['song_name'];
    $artistName = $_POST['artist_name'];
    $adminId = $_POST['AdminId'];
    $imge = $_FILES['songImage']['name'];
    $path = 'Songs/'.$imge;
    move_uploaded_file($_FILES['songImage']['tmp_name'],$path);
//    var_dump($path);
    $statement = $app['db']->query("INSERT INTO songs (user_id,song_name,artist_name,song_image)VALUES('$adminId','$songName','$artistName','$path')");

    $fetchSongList = $app['db']->query("SELECT * FROM songs");
    $songs = $fetchSongList->fetchAll(PDO::FETCH_OBJ);

    $fetchUsers = $app['db']->query("SELECT * FROM users");
    $users = $fetchUsers->fetchAll(PDO::FETCH_OBJ);
    require 'Views/view.home.php';
}
catch (Exception  $e){
    die($e->getMessage());
}
