<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User home page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Welcome the <mark>User</mark> home page</h1>
<div class="action">
    <a href="/songList">song list</a>
    <a href="/createPlaylists">Create Playlist</a>
    <a href="/allUsers">All Users</a>
</div>
<ol>
<!--    <h3>Song list are here</h3>-->
    <?php foreach ($songs as $song): ?>
        <li>Song Name: <?php echo $song->name; ?></li>
        <li>Song :  <audio controls><source src="<?php echo $song->song_path; ?>" type="audio/ogg"></audio></li>
        <li>Song Image<img src="<?php echo $song->song_image; ?>"  height="50px" width="50px" alt=""></li>
    <?php endforeach; ?>
</ol>
<div>
<!--    --><?php //foreach ($Allplaylist as $playlist): ?>
    <p><?php echo $Allplaylist->name ?></p>
<!--        --><?php //var_dump();?>
<!--    --><?php //endforeach; ?>
</div>
</body>
</html>