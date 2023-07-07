<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add users</title>
</head>
<body>
<form action="/userLogic" method="post">
    <input type="hidden" name="id" value="1">
    <div>
        <label>user Name: </label>
        <input type="text" name="UserName">
    </div>
    <div>
        <label>is_premium</label>
        <input type="number" name="premium">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
</body>
</html>