<?php

session_start();

if (isset($_SESSION['session_id']))
{
    header("Location: logged_in.php");
    die();
}

?>
