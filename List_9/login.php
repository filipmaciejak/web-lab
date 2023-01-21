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
    
    // check if data matches an account
    $sql = "SELECT * FROM users WHERE username='$reg_username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $sql = "SELECT password FROM users WHERE username='$reg_username'";
        $hash = mysqli_fetch_row(mysqli_query($conn, $sql))[0];
        if (password_verify($reg_password, $hash)) {
            // SUCCESS
            session_regenerate_id();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $reg_username;
            $sql = "SELECT email FROM users WHERE username='$reg_username'";
            $email = mysqli_fetch_row(mysqli_query($conn, $sql))[0];
            $_SESSION['email'] = $email;
            $_SESSION['message'] = '<span class="green">Logged in successfully!</span>';
            header("Location: home.php");
            die();
        }
    }
    // FAIL
    $_SESSION['message'] = '<span class="red">Wrong username or password!</span>';
    header("Location: login_page.php");
    die();
?>
