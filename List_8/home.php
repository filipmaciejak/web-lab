<!DOCTYPE html>
<?php require 'logged_in_script.php'; require 'setcookie.php';?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your account</title>
    <link rel="stylesheet" href=<?php echo getStylesheet();?>>
</head>
<body>
    <h1>Welcome back, <?php echo $_SESSION['username'] ?></h1>
    <p>There's nothing here yet, so please, enjoy some sample text.</p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor viverra nisi quis suscipit. Quisque vulputate efficitur urna gravida porta. Nunc ut aliquet sapien. Vestibulum vulputate euismod augue. Ut non arcu convallis, placerat dui at, viverra diam. Pellentesque ut sem ligula. Fusce vulputate mi sit amet malesuada porttitor. Phasellus nisl ipsum, tempus eget justo quis, bibendum maximus lorem. Aliquam lorem urna, accumsan ac nulla vel, pellentesque euismod enim. In venenatis at neque ut congue.
    </p>
    <p>
        In at tortor porta, consequat erat sit amet, feugiat purus. Morbi lorem elit, egestas sed urna elementum, eleifend commodo mauris. Nam at ex sem. Integer sed elit non urna ultrices hendrerit. Fusce interdum, metus sit amet accumsan gravida, justo sem accumsan neque, id pulvinar purus orci id turpis. Duis porttitor, erat id commodo finibus, augue odio pellentesque mauris, ut vulputate ex sapien nec ex. Donec vel tempor tortor. Ut sagittis lorem vel leo sagittis, vel consequat ligula condimentum. Vestibulum nec quam commodo, mattis purus scelerisque, cursus dui.
    </p>
    <form action="logout.php" method="post">
        <input type="submit" name="submit" value="Log Out">
    </form>
    <form action="home.php" method="post">
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
