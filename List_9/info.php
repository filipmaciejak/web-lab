<?php
    session_start();
    $_SESSION["message"] = array();

    require_once('connect.php');
    require_once('personal_form_validation.php');

    // connect to database
    $conn = mysqli_connect($host, $db_user, $db_password, $db_name);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to database: " . mysqli_connect_error();
        die();
    }

    else {
        // get data by post
        $reg_username = quotemeta($_POST["username"]);
        $reg_password = quotemeta($_POST["password"]);
        $reg_name = quotemeta($_POST["name"]);
        $reg_surname = quotemeta($_POST["surname"]);
        $reg_email = $_POST["email"];
        $reg_phone_number = quotemeta($_POST["phone_number"]);

        $errors = array_merge(validate_name($reg_name), validate_surname($reg_surname), validate_email($reg_email), validate_phone_number($reg_phone_number));

        if (count($errors) != 0) {
            $_SESSION["message"] = $errors;
            if (isset($_SESSION['loggedin'])) {
                header("Location: change_info.php");
            }
            else {
                header("Location: registration_page.php");
            }
        }

        elseif (isset($_SESSION['loggedin'])) {
            $sql = "SELECT * FROM users WHERE username='$reg_username'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);

            if ($num > 0 && $reg_username != $_SESSION['username']) {
                $_SESSION['message'][count($_SESSION['message'])] = '<span class="red">Username not available!</span>';
                header("Location: change_info.php");
                mysqli_close($conn);
                die();
            }

            $old_username = $_SESSION['username'];
            $sql = "SELECT password FROM users WHERE username='$old_username'";
            $hash = mysqli_fetch_row(mysqli_query($conn, $sql))[0];

            if (!password_verify($reg_password, $hash)) {
                $_SESSION['message'][count($_SESSION['message'])] = '<span class="red">Incorrect password!</span>';
                header("Location: change_info.php");
                mysqli_close($conn);
                die();
            }

            $sql = "UPDATE users SET username='$reg_username', name='$reg_name', surname='$reg_surname', email='$reg_email', phone_number='$reg_phone_number' where username='$old_username'";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $reg_username;
            $reg_newpassword = $_POST["newpassword"] ?? '';

            if ($reg_newpassword != "") {
                $hash = password_hash($reg_newpassword, PASSWORD_DEFAULT);
                $sql = "UPDATE users SET password='$hash' WHERE username='$reg_username'";
                mysqli_query($conn, $sql);
            }

            $_SESSION['message'][count($_SESSION['message'])] = '<span class="green">Data updated successfully!</span>';
            header("Location: home.php");
        }

        else {
            // check if user already exists
            $sql = "SELECT * FROM users WHERE username='$reg_username'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                $_SESSION['message'][count($_SESSION['message'])] = '<span class="red">Username not available!</span>';
                header("Location: registration_page.php");
                mysqli_close($conn);
                die();
            }
        
            // create a new user
            $hash = password_hash($reg_password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, password, name, surname, email, phone_number) VALUES ('$reg_username', '$hash', '$reg_name', '$reg_surname', '$reg_email', '$reg_phone_number')";
            $result = mysqli_query($conn, $sql);
        
            // redirect to login page
            $_SESSION['message'][count($_SESSION['message'])] = '<span class="green">Registered successfully!</span>';
            header("Location: login_page.php");
        }

        mysqli_close($conn);
    }
?>
