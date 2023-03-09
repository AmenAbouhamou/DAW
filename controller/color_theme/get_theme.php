<?php
// get the color theme used
function get_theme(): string
{
  $theme = "light";
  if (!isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
  }
  return $theme;
}
