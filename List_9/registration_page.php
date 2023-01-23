<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');</style>
    <title>Sign up</title>
    <?php session_start(); ?>
</head>
<body>
    <h1>Sign up</h1>
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
    <form method="post" action="info.php">
        <input type="text" placeholder="Name" name="name" required>
        <input type="text" placeholder="Surname" name="surname" required>
        <input type="email" placeholder="E-mail address" name="email" required>
        <input type="tel" placeholder="Phone number" name="phone_number" required>
        <input type="text" placeholder="Username" name="username" required>
        <input type="password" placeholder="password" name="password" required>
        <input type="submit" value="Register">
        <input type="hidden" name="origin" value="register">
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
