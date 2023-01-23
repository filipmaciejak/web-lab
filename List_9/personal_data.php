<?php
    require_once('logged_in_script.php');
    require_once('connect.php');

    $conn = mysqli_connect($host, $db_user, $db_password, $db_name);
    $personal_data = array();
    $username = $_SESSION["username"];

    if (mysqli_connect_errno()) {
        echo "Failed to connect to database: " . mysqli_connect_error();
        die();
    }

    else {
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo("Error description: " . mysqli_error($conn));
        }
        else {
            $num = mysqli_num_rows($result);
            if ($num == 1) {
                $personal_data = mysqli_fetch_row($result);
            }
        }
        mysqli_close($conn);
    }
    
?>