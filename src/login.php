<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form id="loginForm" method="POST" action="content1.php">
            <span><input type="text" name="username" placeholder="Username"></span>
            <input type="hidden" name="thruLogin" value="True">
            <input type="submit" value="Login">
        </form>
    </body>
</html>