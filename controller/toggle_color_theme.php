<?php
// switch the color theme used
function toggle_color_theme(){
  $theme ="light";
  if (!isset( $_COOKIE['theme'])) {
    setcookie('theme', "light", time() + 365*24*3600,"/");
  } else {
    if ($theme == "light") {
      setcookie('theme', "dark", time() + 365*24*3600,"/");
    } else {
      setcookie('theme', "light", time() + 365*24*3600,"/");
    }
  }
}