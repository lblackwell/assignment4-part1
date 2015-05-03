<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();

if((!isset($_SESSION['username']) && (!isset($_POST['thruLogin']))))
{
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Content 1</title>
</head>
    <body>
        <?php
            if(empty($_POST['username']) && !isset($_SESSION['username']))
            {
                echo "A username must be entered. Click <a href='login.php'>here</a> to return to the login screen.";
            }

            elseif(session_status() == PHP_SESSION_ACTIVE)
            {
                if(isset($_POST['username']))
                {
                    $_SESSION['username'] = $_POST['username'];
                }

                if(!isset($_SESSION['visits']))
                {
                    $_SESSION['visits'] = 0;
                }

                $_SESSION['visits']++;
                echo "Hello ".$_SESSION['username'].", you have visited this page ".$_SESSION['visits']
                    ." times before. Click <a href='logout.php'>here</a> to logout.<br>";
                echo "<a href='content2.php'>Content 2</a>";
            }
        ?>
    </body>
</html>