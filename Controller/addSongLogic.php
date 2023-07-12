<?php
$app['db']= (new Database())->db;

try {
    $songName = $_POST['songName'];
    $songImg = $_FILES['SongImage']['name'];
    $imgPath = 'Images/'.$songImg;
    move_uploaded_file($_FILES['SongImage']['tmp_name'],$imgPath);
//    $songpath = $_POST['songPath'];

    $song = $_FILES['songPath']['name'];
    $songPath = 'song/'.$song;
    move_uploaded_file($_FILES['songPath']['tmp_name'],$songPath);
    $songpath = $_POST['songPath'];

    $insertSongDetails = $app['db']->query("INSERT INTO songs (name,song_path,song_image,artists_id)VALUES ('$songName','$songPath','$imgPath',1)");

    $fetchSongdetails = $app['db']->query("SELECT * FROM songs");
    $songList = $fetchSongdetails->fetchAll(PDO::FETCH_OBJ);
//    var_dump($songList);
    require 'View/adminDashboared.php';
//    require 'View/userHome.php';
//    header("location:/login_logic");

}
catch (Exception $e){
    die($e->getMessage());
}