<!DOCTYPE html>
<?php require 'login_page_script.php'; ?>
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
    <h2>Log In</h2>
    <?php if (isset($_SESSION['login_error']) && $_SESSION['login_error']): ?>
        <div class="login-error">
            Invalid username or password. Please try again.
        </div>
    <?php endif; ?>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Enter your username" required autocomplete='off'><br>
        <input type="password" name="password" placeholder="Enter your password" required><br>
        <input type="submit" name="submit" value="Log In">
    </form>
    <footer>
        <a href="mailto:wojciechdominiak80@gmail.com">Wojciech Dominiak</a> & <a href="mailto:fimaciejak@gmail.com">Filip Maciejak</a>
        <p>&copy; 2023 All rights reserved</p>
    </footer>
</body>
</html>
