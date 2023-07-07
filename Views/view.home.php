<?php

$app['db']= (new Database())->db;

$user=$_SESSION['login']['name'];
$stmt = $app['db']->query("SELECT * FROM admin WHERE name='$user'");
$values = $stmt->fetch(PDO::FETCH_OBJ);
$_SESSION['AdminId'] = $values->id;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Home page</title>
</head>
<body>
<h1>Welcome to our website</h1>
<a href="/logout" class="logout">logout</a>
<h2>Hello <?php echo $_SESSION['login']['name'] ?></h2>

<div>
    <form action="/addSongs" method="post">
    <button value="<?php echo  $_SESSION['AdminId']; ?>" name="addSong" type="submit">Add Song</button>
    </form>
</div>
<div>
    <table>
        <h2>List of song are here..</h2>
        <tr>
        <th>Artist Names</th>
        <th>Song Names</th>
        </tr>
        <?php foreach ($songs as $values): ?>
            <tr>
                <td><?php  echo $values->artist_name ?></td>
                <td><?php echo $values->song_name ?></td>
<!--                <td><img src="--><?php //echo $values->song_image ?><!--" alt=""></td>-->
<!--                <td><audio controls><source src="--><?php //echo $values->song_path ?><!--" type="audio/ogg"></audio></td>-->
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<div class="ExitingUser">
    <h3>Existing Users</h3>
    <?php foreach ($users as $user): ?>
    <ul>
        <li><?php echo $user->user_name ?></li>
    </ul>
    <?php endforeach; ?>
</div>
</body>
</html>
<style>
    table {
        width: 50%;
        border-collapse: collapse;
        border: 1px solid;
        text-align: center;
    }
    th {
        height: 70px;
        border: 1px solid;
    }
    td {
        text-align: center;
        border: 1px solid;
    }
    .ExitingUser {
        float: right;
        position: relative;
        bottom: 200px;
        right: 200px;
    }
</style>