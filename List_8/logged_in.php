<!DOCTYPE html>
<?php require 'logged_in_script.php'; ?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href=<?php echo getStylesheet();?>>
</head>
<body>
    <h1>Welcome</h1>
    <h2>You're already logged in</h2>
    <form action="home.php" method="post">
        <input type="submit" name="submit" value="Ok">
    </form>
    <form action="logged_in.php" method="post">
        <input type="radio" name="style" id="style1" value="1">
        <label for="style1">Style 1</label>
        <input type="radio" name="style" id="style2" value="2">
        <label for="style2">Style 2</label>
        <input type="radio" name="style" id="style3" value="3">
        <label for="style3">Style 3</label>
        <input type="radio" name="style" id="style4" value="4">
        <label for="style4">Style 4</label>
        <input type="radio" name="style" id="style5" value="5">
        <label for="style5">Style 5</label>
        <input type="submit" name="set_style" value="Select">
    </form>
    <footer>
        <a href="mailto:wojciechdominiak80@gmail.com">Wojciech Dominiak</a> & <a href="mailto:fimaciejak@gmail.com">Filip Maciejak</a>
        <p>&copy; 2023 All rights reserved</p>
    </footer>
</body>
</html>
