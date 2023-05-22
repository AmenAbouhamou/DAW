<?php
// get the color theme used
function get_theme(): string
{
    $theme = "light";
    if (isset($_COOKIE['theme'])) {
        $theme = $_COOKIE['theme'];
    }else
        setcookie('theme', "light", time() + 365*24*3600,"/");
    return $theme;
}
