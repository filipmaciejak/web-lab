<?php

$submitted = false;
$ip_address = '';

define('GENDERS', array('male', 'female', 'other'));
define('MONTHS', array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'));
define('LANGUAGES', array('english', 'german', 'spanish', 'italian'));
$errors = array();

function validate_name($name)
{
    global $errors;
    if (strlen($name) > 50)
    {
        $errors[count($errors)] = "Name cannot be larger than 50 characters!";
    }
    if (preg_match("/[A-Za-zĄĘÓŁŻŹĆŃąęółżźćń]/", $name) == 1) 
    {
        $errors[count($errors)] = "Name cannot contain digits!";
    }
}

function validate_surname($surname)
{
    global $errors;
    if ($surname == '')
    {
        $errors[count($errors)] = "Surname cannot be empty!";
    }
    elseif (strlen($surname) > 50)
    {
        $errors[count($errors)] = "Surname cannot be larger than 50 characters!";
    }
    if (preg_match("/[0-9]/", $surname) == 1) 
    {
        $errors[count($errors)] = "Surname cannot contain digits!";
    }
}

function validate_gender($gender)
{
    global $errors;
    if ($gender == '')
    {
        $errors[count($errors)] = "Please choose a gender!";
    }
    elseif (!in_array($gender, GENDERS))
    {
        $errors[count($errors)] = "Please choose a correct gender!";
    }
}
function validate_month($month)
{
    global $errors;
    if (($month != '') && (!in_array($month, MONTHS)))
    {
        $errors[count($errors)] = "Please choose a correct month from a list!";
    }
}

function validate_email($email)
{
    global $errors;
    if ($email == '')
    {
        $errors[count($errors)] = "Please type your e-mail address!";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $errors[count($errors)] = "Please type a proper e-mail address!";
    }
}

function validate_phone_number($phone)
{
    global $errors;
    if (($phone != '') && (preg_match('/[0-9]{3}-[0-9]{3}-[0-9]{3}/', $phone) != 1))
    {
        $errors[count($errors)] = "Please type a phone number in the correct format!";
    }
}

function validate_languages($languages)
{
    global $errors;
    if ($languages != '')
    {
        $error = false;
        foreach($languages as $language)
        {
            if (!in_array($language, LANGUAGES))
            {
                $error = true;
            }
        }
        if ($error)
        {
            $errors[count($errors)] = "Please choose a correct language!";
        }
    }
}

if (isset($_POST['submit']))
{
    global $submitted;
    global $ip_address;

    $submitted = true;
    $ip_address = $_SERVER['REMOTE_ADDR'];
    
    $name = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $month = $_POST['month'] ?? '';
    $email = $_POST['mail'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $languages = $_POST['languages'] ?? '';

    validate_name($name);
    validate_surname($surname);
    validate_gender($gender);
    validate_month($month);
    validate_email($email);
    validate_phone_number($phone);
    validate_languages($languages);
}

?>