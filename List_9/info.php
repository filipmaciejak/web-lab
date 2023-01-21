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

    if (isset($_SESSION['loggedin'])) {
        $sql = "SELECT * FROM users WHERE username='$reg_username'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num > 0 && $reg_username != $_SESSION['username']) {
            $_SESSION['message'] = '<span class="red">Username not available!</span>';
            header("Location: change_info.php");
            die();
        }
        $old_username = $_SESSION['username'];
        $sql = "SELECT password FROM users WHERE username='$old_username'";
        $hash = mysqli_fetch_row(mysqli_query($conn, $sql))[0];
        if (!password_verify($reg_password, $hash)) {
            $_SESSION['message'] = '<span class="red">Password incorrect!</span>';
            header("Location: change_info.php");
            die();
        }
        $sql = "UPDATE users SET username='$reg_username', email='$reg_email' where username='$old_username'";
        mysqli_query($conn, $sql);
        $_SESSION['username'] = $reg_username;
        $_SESSION['email'] = $reg_email;
        $reg_newpassword = $_POST["newpassword"];
        if ($reg_newpassword != "") {
            $hash = password_hash($reg_newpassword, PASSWORD_DEFAULT);
            $sql = "UPDATE users SET password='$hash' WHERE username='$old_username'";
            mysqli_query($conn, $sql);
        }
        $_SESSION['message'] = '<span class="green">Data updated successfully!</span>';
        header("Location: change_info.php");
        die();
    }

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
