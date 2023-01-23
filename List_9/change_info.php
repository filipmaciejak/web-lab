<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');</style>
    <title>Change Info</title>
    <?php require 'logged_in_script.php'; ?>
</head>
<body>
    <h1>Change Your Info</h1>
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
        <input type="text" placeholder="Name" name="name" value="<?php echo $_SESSION["name"] ?? ""; ?>" required>
        <input type="text" placeholder="Surname" name="surname" value="<?php echo $_SESSION["surname"] ?? ""; ?>" required>
        <input type="email" placeholder="E-mail address" name="email" value="<?php echo $_SESSION["email"] ?? ""; ?>" required>
        <input type="tel" placeholder="Phone number" name="phone_number" value="<?php echo $_SESSION["phone_number"] ?? ""; ?>" required>
        <input type="text" placeholder="Username" name="username" value="<?php echo $_SESSION["username"] ?? ""; ?>" required>
        <input type="password" placeholder="Old password" name="password" required>
        <input type="password" placeholder="New password" name="newpassword">
        <input type="submit" value="Submit">
        <input type="button" onclick="location.href='home.php';" value="Cancel" />
        <input type="hidden" name="origin" value="register">
    </form>
    <footer>
        <p style="text-align: center;"> By <a href="mailto:wojciechdominiak80@gmail.com">Wojciech Dominiak</a> & <a href="mailto:fimaciejak@gmail.com">Filip Maciejak</a></p>
        <p style="text-align: center;">Copyright &copy; 2023 All rights reserved.</p>
    </footer>
</body>
</html>
