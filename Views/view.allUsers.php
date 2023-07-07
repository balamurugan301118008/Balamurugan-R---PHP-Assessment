<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>List of all Exiting users</h3>
        <form action="/updatePremium" method="post">
            <?php foreach ($AllUsers as $users): ?>
                <button name="updatepremium" style="display: flex" value="<?php echo $users->id ?>"><?php echo $users->user_name ?></button>
            <?php endforeach; ?>
        </form>
        <a href="/">Back to home</a>
    </div>
</body>
</html>