<?php

session_start();

if (!isset($_SESSION['username']) || $_SESSION['username'] == "") {
    header("Location: login_page.php");
    die();
}

?>
