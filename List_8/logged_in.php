<!DOCTYPE html>
<?php require 'logged_in_script.php'; ?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome</h1>
    <h2>You're already logged in</h2>
    <form action="home.php" method="post">
        <input type="submit" name="submit" value="Ok">
    </form>
    <footer>
        <a href="mailto:wojciechdominiak80@gmail.com">Wojciech Dominiak</a> & <a href="mailto:fimaciejak@gmail.com">Filip Maciejak</a>
        <p>&copy; 2023 All rights reserved</p>
    </footer>
</body>
</html>
