<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');</style>
    <title>Sign up</title>
</head>
<body>
    <h1>Sign up</h1>
    <?php
        session_start();
        if (isset($_SESSION['message']))
        {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    ?>
    <form method="post" action="info.php">
        <input type="text" placeholder="username" name="username">
        <input type="email" placeholder="e-mail" name="email">
        <input type="password" placeholder="password" name="password">
        <input type="submit" value="Submit">
    </form>
    <p>
        Already have an account? <a href="login_page.php">Sign in</a>
    </p>
    <footer>
        <p style="text-align: center;"> By <a href="mailto:wojciechdominiak80@gmail.com">Wojciech Dominiak</a> & <a href="mailto:fimaciejak@gmail.com">Filip Maciejak</a></p>
        <p style="text-align: center;">Copyright &copy; 2023 All rights reserved.</p>
    </footer>
</body>
</html>
