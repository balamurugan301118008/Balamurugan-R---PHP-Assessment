
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login here</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Login</h1>
    <form action="/login_logic" method="post">
        <div class="signup">
            <div>
                <label>UserName:</label>
                <input type="text" name="Username" autocomplete="on" required>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="pass" autocomplete="on" required>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>