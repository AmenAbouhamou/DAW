<?php
require_once 'toggle_color_theme.php';
// get the color theme that we used
function get_color_theme():string{
    $theme = 0;
    if (isset($_COOKIE['theme'])) {
      //toggle_color_theme();
      $theme = $_COOKIE['theme'];
    }
    return $theme;
  }
