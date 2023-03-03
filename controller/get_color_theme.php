<?php
// get the color theme used
function get_color_theme():int{
  $theme = $_COOKIE['theme'];
  if (!isset($theme)) {
    toggle_theme();
    $theme = $_COOKIE['theme'];
  }
  return $theme;
}
