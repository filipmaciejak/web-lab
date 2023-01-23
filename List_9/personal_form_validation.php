<?php

function validate_name($name)
{
    $errors = array();
    if (strlen($name) > 50)
    {
        $errors[count($errors)] = "Name cannot be larger than 50 characters!";
    }
    if (preg_match("/[0-9]/", $name) == 1) 
    {
        $errors[count($errors)] = "Name cannot contain digits!";
    }
    return $errors;
}

function validate_surname($surname)
{
    $errors = array();
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
    return $errors;
}

function validate_email($email)
{
    $errors = array();
    if ($email == '')
    {
        $errors[count($errors)] = "Please type your e-mail address!";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $errors[count($errors)] = "Please type a proper e-mail address!";
    }
    return $errors;
}

function validate_phone_number($phone)
{
    $errors = array();
    if (($phone != '') && (preg_match('/[0-9]{3}-[0-9]{3}-[0-9]{3}/', $phone) != 1))
    {
        $errors[count($errors)] = "Please type a phone number in the correct format!";
    }
    return $errors;
}
?>
