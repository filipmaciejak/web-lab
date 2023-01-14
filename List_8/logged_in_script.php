<?php

session_start();

if (!isset($_SESSION['session_id']))
{
    header("Location: login_page.php");
    die();
}

?>
