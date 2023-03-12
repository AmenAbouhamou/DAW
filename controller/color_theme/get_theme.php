<?php
// get the color theme used
require_once "toggle_theme.php";
function get_theme(): string
{
  $theme = "light";
  isset($_COOKIE['theme']) ? $theme=$_COOKIE["theme"] : setcookie('theme', "light", time() + 365*24*3600,"/");
  return $theme;
}
