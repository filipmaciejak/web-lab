<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');</style>
    <title>Home Page</title>
    <?php session_start(); ?>
</head>
<body>
    <h1>Welcome back, <?php echo $_SESSION["username"]; ?></h1>
    <form action="change_info.php">
        <input type="submit" value="Change My Info">
    </form>
    <form action="logout.php">
        <input type="submit" value="Log out">
    </form>
    <footer>
        <p style="text-align: center;"> By <a href="mailto:wojciechdominiak80@gmail.com">Wojciech Dominiak</a> & <a href="mailto:fimaciejak@gmail.com">Filip Maciejak</a></p>
        <p style="text-align: center;">Copyright &copy; 2023 All rights reserved.</p>
    </footer>
</body>
</html>
