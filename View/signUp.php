<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="maincontainer">
    <div class="container">
        <h1>Signup</h1>
        <form action="/loginPage" method="post">
            <div class="signup">
                <div class="name common">
                    <label>Name:</label>
                    <input type="text" name="name" class="UserName" autocomplete="off" required>
                </div>
                <div class="pass common">
                    <label>password:</label>
                    <input type="password" name="pass" autocomplete="off" required>
                </div>
                <div>
                    <button name="register" type="submit" value="Sign Up">Register</button>
                </div>
            </div>
        </form>
        <span>Already have an Account?<a href="/loginPage">Login in</a></span>
    </div>
</div>
</body>
</html>
