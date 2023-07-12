<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Admin home page</title>
</head>
<body>
<h1>Welcome the <mark>Admin</mark> Dashboared home page</h1>
<div class="action">
    <a href="/AddSongs">Add song</a>
    <a href="/addArtists">Add Artist</a>
    <a href="/allUsers">All Users</a>
</div>
<div>
<ol>
    <h3>Song list are here</h3>
<?php foreach ($songList as $songs): ?>
        <li>Song Name: <?php echo $songs->name; ?></li>
        <li>Song :  <audio controls><source src="<?php echo $songs->song_path; ?>" type="audio/ogg"></audio></li>
        <li>Song Image<img src="<?php echo $songs->song_image; ?>"  height="50px" width="50px" alt=""></li>
<?php endforeach; ?>
</ol>
</div>
<div>
    <h3>Artist names are here</h3>
    <?php  foreach ($artists as $artist): ?>
        <p>User Name :<?php echo $artist->name; ?></p>
    <?php endforeach; ?>
</div>
<div>

    <?php  foreach ($users as $user): ?>
        <p>User Name :<?php echo $user->user_name; ?></p>
    <?php endforeach; ?>
</div>
</body>
</html>