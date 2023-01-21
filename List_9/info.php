<?php
    session_start();

    // connect to database
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $database = "db";
    $conn = mysqli_connect($servername, $username, $password, $database);

    // get data by post
    $reg_username = $_POST["username"];
    $reg_password = $_POST["password"];
    $reg_email = $_POST["email"];

    // check if user already exists
    $sql = "SELECT * FROM users WHERE username='$reg_username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        $_SESSION['message'] = '<span class="red">Username not available!</span>';
        header("Location: registration_page.php");
        die();
    }

    // create a new user
    $hash = password_hash($reg_password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `users` ( `username`, `password`, `email`) VALUES ('$reg_username', '$hash', '$reg_email')";
    $result = mysqli_query($conn, $sql);

    // redirect to login page
    $_SESSION['message'] = '<span class="green">Registered successfully!</span>';
    header("Location: login_page.php");
    die();
?>
