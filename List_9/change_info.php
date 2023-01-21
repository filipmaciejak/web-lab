<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');</style>
    <title>Change Info</title>
    <?php session_start(); ?>
</head>
<body>
    <h1>Change Your Info</h1>
    <?php
        if (isset($_SESSION['message']))
        {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    ?>
    <form method="post" action="info.php">
        <input type="text" placeholder="username" name="username" value=<?php echo `"`.$_SESSION['username'].`"`; ?>>
        <input type="email" placeholder="e-mail" name="email" value=<?php echo `"`.$_SESSION['email'].`"`; ?>>
        <input type="password" placeholder="old password" name="password">
        <input type="password" placeholder="new password (optional)" name="newpassword">
        <input type="submit" value="Submit">
        <input type="hidden" name="origin" value="update">
    </form>
    <form action="home.php">
        <input type="submit" value="Cancel">
    </form>
    <footer>
        <p style="text-align: center;"> By <a href="mailto:wojciechdominiak80@gmail.com">Wojciech Dominiak</a> & <a href="mailto:fimaciejak@gmail.com">Filip Maciejak</a></p>
        <p style="text-align: center;">Copyright &copy; 2023 All rights reserved.</p>
    </footer>
</body>
</html>
