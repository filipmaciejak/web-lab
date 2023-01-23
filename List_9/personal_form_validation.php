<?php

function validate_name($name)
{
    $errors = array();
    if (strlen($name) > 50)
    {
        $errors[count($errors)] = '<span class="red">Name cannot be larger than 50 characters!</span>';
    }
    if (preg_match("/[0-9]/", $name) == 1) 
    {
        $errors[count($errors)] = '<span class="red">Name cannot contain digits!</span>';
    }
    return $errors;
}

function validate_surname($surname)
{
    $errors = array();
    if ($surname == '')
    {
        $errors[count($errors)] = '<span class="red">Surname cannot be empty!</span>';
    }
    elseif (strlen($surname) > 50)
    {
        $errors[count($errors)] = '<span class="red">Surname cannot be larger than 50 characters!</span>';
    }
    if (preg_match("/[0-9]/", $surname) == 1) 
    {
        $errors[count($errors)] = '<span class="red">Surname cannot contain digits!</span>';
    }
    return $errors;
}

function validate_email($email)
{
    $errors = array();
    if ($email == '')
    {
        $errors[count($errors)] = '<span class="red">E-mail cannot be empty!</span>';
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $errors[count($errors)] = '<span class="red">Please type a proper e-mail address!</span>';
    }
    return $errors;
}

function validate_phone_number($phone)
{
    $errors = array();
    if (($phone != '') && (preg_match('/[0-9]{3}-[0-9]{3}-[0-9]{3}/', $phone) != 1))
    {
        $errors[count($errors)] = '<span class="red">Please type a phone number in the correct format!</span>';
    }
    return $errors;
}
?>
