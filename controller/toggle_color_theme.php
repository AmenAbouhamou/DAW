<?php
// switch the color theme used
function toggle_color_theme(){
  $theme = $_COOKIE['theme'];
  if (!isset($theme)) {
    setcookie('theme', 0, time() + 365*24*3600);
  } else {
    if ($theme == 0) {
      setcookie('theme', 1, time() + 365*24*3600);
    } else {
      setcookie('theme', 0, time() + 365*24*3600);
    }
  }
}
