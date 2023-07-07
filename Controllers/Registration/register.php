<?php
$Username = $_POST['name'];
$UserMail = $_POST['email'];
$password = $_POST['pass'];

if($UserMail && $password && $Username){
    $statement = $app['db']->query("SELECT * FROM admin WHERE email='$UserMail'");
    $exists = $statement->fetchAll();

    if($exists){
        // echo "You have an already account";
        header('location:/registration');
    }
    else{
        $statement = $app['db']->query("INSERT INTO admin (name,email,password)VALUES('$Username','$UserMail','$password')");
        $_SESSION['login'] = [
            'name'=>$Username
        ];
        header('location:/');
    }
}