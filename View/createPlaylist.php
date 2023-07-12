<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create playlists</title>
</head>
<body>
<form action="/playListLogic" method="post" enctype="multipart/form-data">
    <div>
        <label>playlist name :</label>
        <input type="text" name="playlistName" id="" placeholder="Enter a playlist name">
    </div>
<!--    <div>-->
<!--        <label>song file :</label>-->
<!--        <input type="file" name="songPath">-->
<!--    </div>-->
    <button type="submit">create Playlist</button>
</form>
</body>
</html>