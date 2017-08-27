<?php
session_start();
if (!empty($_SESSION['logged_in'])) {

    header("location:/views/login.php");
    exit();
} else {
    echo 'You are not logged in. <a href="views/login.php">Click here</a> to log in.';
}
