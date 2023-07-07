<?php
try{
    $songName = $_POST['song_name'];
    $artistName = $_POST['artist_name'];
    $adminId = $_POST['AdminId'];

    $statement = $app['db']->query("INSERT INTO songs (user_id,song_name,artist_name)VALUES('$adminId','$songName','$artistName')");

    $fetchSongList = $app['db']->query("SELECT * FROM songs");
    $songs = $fetchSongList->fetchAll(PDO::FETCH_OBJ);

    $fetchUsers = $app['db']->query("SELECT * FROM users");
    $users = $fetchUsers->fetchAll(PDO::FETCH_OBJ);
    require 'Views/view.home.php';
}
catch (Exception  $e){
    die($e->getMessage());
}
