<?php

$submitted = false;
$ip_address = '';
$contest_word = '';

define('EDUCATIONS', array('podstawowe','gimnazjalne','zasadnicze zawodowe','zasadnicze branżowe','średnie branżowe','średnie','wyższe'));

$errors = array();

$array = array(1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four');
next($array);
reset($array);
echo "debug info: ";
while (key($array) !== null)
{
    $key = key($array);
    $item = current($array);
    echo "{$key}={$item}\n";
    next($array);
}

function validate_pesel($pesel)
{
    global $errors;
    if (($pesel != '') && (preg_match('/\d{11}/', $pesel) != 1))
    {
        $errors[count($errors)] = "Please type a valid PESEL number!";
    }
}

function validate_mmn($mmn)
{
    global $errors;
    if ($mmn == '')
    {
        $errors[count($errors)] = "Name cannot be empty!";
    }
    if (strlen($mmn) > 50)
    {
        $errors[count($errors)] = "Name cannot be larger than 50 characters!";
    }
    if (preg_match("/[0-9]/", $mmn) == 1)
    {
        $errors[count($errors)] = "Name cannot contain digits!";
    }
    if (preg_match("/[$&+,:;=?@#|'<>.^*()%!-]/", $mmn) == 1)
    {
        $errors[count($errors)] = "Name cannot contain special characters!";
    }
}

function validate_education($education)
{
    global $errors;
    if ($education == '')
    {
        $errors[count($errors)] = "Please choose your education!";
    }
    elseif (!in_array($education, EDUCATIONS))
    {
        $errors[count($errors)] = "Please choose a valid education from the list!";
    }
}

function validate_card($card)
{
    global $errors;
    if ($card == '')
    {
        $errors[count($errors)] = "Please enter your card ID!";
    }
    elseif (preg_match('/[A-Za-z]{3}\d{6}/', $card) == 0)
    {
        $errors[count($errors)] = "Please enter a valid card ID!";
    }
}

function validate_expiration($expiration)
{
    global $errors;
    if (empty($expiration))
    {
        $errors[count($errors)] = "Enter the expiration date!";
    }
    elseif (preg_match('/\d{4}-\d\d/', $expiration) == 0)
    {
        $errors[count($errors)] = "Enter a valid expiration date!";
    }
}

function validate_pin($pin)
{
    global $errors;
    if (empty($pin))
    {
        $errors[count($errors)] = "Please enter your PIN!";
    }
    elseif ($pin < 0 || $pin > 999999)
    {
        $errors[count($errors)] = "Please enter a valid PIN!";
    }
}

function validate_shoe($shoe)
{
    global $errors;
    if (empty($shoe))
    {
        $errors[count($errors)] = "Please enter your shoe size!";
    }
    elseif ($shoe < 0 || $shoe > 100)
    {
        $errors[count($errors)] = "Please enter a valid shoe size!";
    }
    if ($shoe == 11)
    {
        die();
    }
}

function validate_color($color)
{
    global $errors;
    if (empty($color))
    {
        $errors[count($errors)] = "Please enter a color!";
    }
    elseif (preg_match('/#[0-9A-F]{6}/', $color) == 0)
    {
        $errors[count($errors)] = "Please enter a valid color!";
    }
}

function validate_word($word)
{
    global $errors;
    if (empty($word))
    {
        $errors[count($errors)] = "Please enter your word!";
    }
    elseif (preg_match('/^\S*$/', $word) == 0)
    {
        $errors[count($errors)] = "Please enter a valid word!";
    }
}

function validate_link($link)
{
    global $errors;
    if (empty($link))
    {
        $errors[count($errors)] = "Please enter a facebook link!";
    }
    elseif (preg_match('/^(https:|http:|www\.)\S*facebook\S*/', $link) == 0)
    {
        $errors[count($errors)] = "Please enter a valid facebook link!";
    }
}
function validate_guess($guess)
{
    global $errors;
    if (empty($guess))
    {
        $errors[count($errors)] = "Please enter a number guess!";
    }
    elseif ($guess != 2 + 2 * 2)
    {
        $errors[count($errors)] = "Bad answer!";
    }
}

if (isset($_POST['submit']))
{
    global $submitted;
    global $ip_address;
    global $contest_word;

    $submitted = true;
    $ip_address = $_SERVER['REMOTE_ADDR'];

    $pesel = $_POST['pesel'] ?? '';
    $mmn = $_POST['mother_maiden_name'] ?? '';
    $education = $_POST['education'] ?? '';
    $card = $_POST['id_card'] ?? '';
    $expiration = $_POST['card_expiration_date'] ?? '';
    $pin = $_POST['pin'] ?? '';
    $shoe = $_POST['shoe_size'] ?? '';
    $color = $_POST['fav_color'] ?? '';
    $word = $_POST['fav_word'] ?? '';
    $link = $_POST['fb_link'] ?? '';
    $guess = $_POST['guess'] ?? '';

    validate_pesel($pesel);
    validate_mmn($mmn);
    validate_education($education);
    validate_card($card);
    validate_expiration($expiration);
    validate_pin($pin);
    validate_shoe($shoe);
    validate_color($color);
    validate_word($word);
    validate_link($link);
    validate_guess($guess);
    
    $contest_word = preg_replace('/[^A-Za-z0-9]/', '?', $word);
}

?>
