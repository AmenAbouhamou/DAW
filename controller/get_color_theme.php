<?php
require_once 'toggle_color_theme.php';
// get the color theme used
function get_color_theme():int{
  $theme = 1;
  if (!isset($theme)) {
    toggle_theme();
    $theme = $_COOKIE['theme'];
  }
  return $theme;
}
