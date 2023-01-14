<?php

session_start();

if (isset($_POST['submit']))
{
    session_destroy();
    header("Location: login_page.php");
    die();
}

?>
