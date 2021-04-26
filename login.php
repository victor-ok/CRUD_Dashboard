<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
<div>
    <h1>Login</h1>
    <form action="auth.php" method="post">
        <label for="email">Name</label>
        <input type="text" id="name" name="name" placeholder="Your Username?">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Your Password?">

        <input type="submit" name="login" value="Login">
        <p>Don't have an account? <a href="index.php">Register</a></p>

    </form>
</div>
</body>
</html>