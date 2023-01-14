<?php

session_start();

define('USERS', array('filip1' => 'haslo', 'wojtek1' => 'password123', 'admin' => 'admin'));

function validate_login($username, $password)
{
    if ($username == '')
    {
        return false;
    }
    if (!array_key_exists($username, USERS))
    {
        return false;
    }
    if (USERS[$username] != $password)
    {
        return false;
    }
    return true;
}

if (isset($_POST['submit']))
{
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $result = validate_login($username, $password);
    if ($result)
    {
        $_SESSION['username'] = $username;
        $_SESSION['session_id'] = uniqid();
        header("Location: home.php");
        die();
    }
    else
    {
        $_SESSION['login_error'] = true;
        header("Location: login_page.php");
        die();
    }
}

?>
