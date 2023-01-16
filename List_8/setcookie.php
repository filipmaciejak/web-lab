<?php
define('STYLES', array("1", "2", "3", "4", "5"));

if (isset($_POST["style"]))
{
    $style = $_POST["style"];
    setcookie("style", $style, time()+30);
    header("Refresh:0");
}

if (isset($_COOKIE["style"]))
{
    echo $_COOKIE["style"];
}
else
{
    echo "empty";
}

function getStylesheet()
{
    if(isset($_COOKIE["style"]))
    {
        $style = $_COOKIE["style"];

        switch($style)
        {
            case in_array($style, STYLES):
                return "style{$style}.css";
            default:
                return "style1.css";
        }
    }
    else
    {
        return "style1.css";
    }
}
?>