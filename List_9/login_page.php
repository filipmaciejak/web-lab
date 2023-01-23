<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');</style>
    <title>Sign in</title>
    <?php session_start(); ?>
</head>
<body>
    <?php
        if (isset($_SESSION['message']))
        {
            $messages = $_SESSION['message'];
            foreach ($messages as $message) {
                echo $message;
            }
            unset($_SESSION['message']);
        }
    ?>
    <h1>Sign In</h1>
    <form method="post" action="login.php">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <input type="submit" value="Submit">
    </form>
    <p>
        New User? <a href="registration_page.php">Sign up</a>
    </p>
    <footer>
        <p style="text-align: center;"> By <a href="mailto:wojciechdominiak80@gmail.com">Wojciech Dominiak</a> & <a href="mailto:fimaciejak@gmail.com">Filip Maciejak</a></p>
        <p style="text-align: center;">Copyright &copy; 2023 All rights reserved.</p>
    </footer>
</body>
</html>
