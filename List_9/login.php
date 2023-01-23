<?php
    session_start();
    $_SESSION['message'] = array();
    require_once('connect.php');

    // connect to database
    $connection = mysqli_connect($host, $db_user, $db_password, $db_name);
    $conn = 'connection';

    if (mysqli_connect_errno()) {
        echo "Failed to connect to database: " . mysqli_connect_error();
        die();
    }

    else {
        // get data by post
        $reg_username = quotemeta($_POST["username"]);
        $reg_password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE username='$reg_username'";
        $result = mysqli_query($$conn, $sql);
        if (!$result) {
            echo("Error description: " . mysqli_error($$conn));
        }
        else {
            $num = mysqli_num_rows($result);
            if ($num == 1) {
                $result_row = mysqli_fetch_row($result);
                $hash_password = $result_row[2];
                if (password_verify($reg_password, $hash_password)) {
                    // SUCCESS
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $result_row[1];
                    header("Location: home.php");
                }
                else {
                    $_SESSION['message'][count($_SESSION['message'])] = '<span class="red">Wrong password!</span>';
                    header("Location: login_page.php");
                }
            }
            else {
                $_SESSION['message'][count($_SESSION['message'])] = '<span class="red">Wrong username!</span>';
                header("Location: login_page.php");
            }
        }
        mysqli_close($$conn);
    }
?>
