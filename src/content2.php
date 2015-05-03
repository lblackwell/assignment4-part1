<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();

if(!isset($_SESSION['username']))
{
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Content 2</title>
</head>
    <body>
        <?php
            echo "<a href='content1.php'>Content 1</a>";
        ?>
    </body>
</html>