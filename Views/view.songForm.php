<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add songs</title>
</head>
<body>
<form action="/songsLogic" method="post" enctype="multipart/form-data">
    <h1>Add song and the details</h1>
    <div>
        <input type="hidden" name="AdminId" value="<?php echo $_SESSION['AdminId']; ?>">
        <label>Song name :</label>
        <input type="text" name="song_name" placeholder="enter a song name">
    </div>
    <div>
        <label>Artist name :</label>
        <input type="text" name="artist_name" id="" placeholder="enter a artist name" >
    <div>
        <div>
            <input type="file" name="songImage">
        <div>
        <button type="submit">Add song</button>
    </div>
</form>
</body>
</html>