<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Add songs page</title>
</head>
<body>
<form action="/addSongLogic" method="post" enctype="multipart/form-data">
    <div>
        <label>song name :</label>
        <input type="text" name="songName" id="" placeholder="Enter a song name">
    </div>
    <div>
        <label>song Images :</label>
        <input type="file" name="SongImage">
    </div>
    <div>
        <label>song file :</label>
        <input type="file" name="songPath" id="" >
    </div>
    <button type="submit">Add song</button>
</form>
</body>
</html>