<?php
require_once 'toggle_color_theme.php';
session_start();
// get the color theme that we used
function get_color_theme():int{
    $theme=0;
    if (!isset($_COOKIE['theme'])) {
        setcookie('theme', 0, time() + 60);
    }else{
                echo "get";
                toggle_color_theme();
                $theme=$_COOKIE['theme'];
    }
    return $theme;
}
