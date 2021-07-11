<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <section class="login-box">
                <h2>Login</h2>
                <form method="post" action="home.php">
                    <input type="text" name="username"placeholder="username" id="username">
                    <input type="password" name="password" placeholder="password" id="password">
                    <input type="submit" value="Login">
                </form>
                <a href="register.php" class="btn btn-success btn-sm text-white" style="text-decoration: none;">Register</a>
            </section>
        </div>
    </body>
</html>