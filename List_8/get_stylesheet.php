<?php

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