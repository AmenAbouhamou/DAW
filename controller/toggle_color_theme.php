<?php
// switch the color theme that we used

if( array_key_exists( 'theme', $_POST ) ){
    toggle_color_theme();
    $newURL="../vue/index.php";
    echo "<meta http-equiv='refresh' content='1;url=$newURL'>";
    unset($_POST['theme']);
}
else
    echo " ciao";
function toggle_color_theme(){
  echo "sdfspdf  ";
  $theme =0;
  if (!isset($_COOKIE["theme"])) {
      echo "IsnotseT  ";
      setcookie("theme", 0, time() + 365*24*3600 );
  } else {
      if(array_key_exists( 'theme', $_POST ) ) {
          echo "é vivo caxxo";
          $theme = $_COOKIE["theme"];
          echo "ISSET ";
          if ($theme == 0) {
              echo "Isset 1   ";
              setcookie("theme", 1, time() + 365*24*3600 );
          } else {
              echo "Isset 0   ";
              setcookie("theme", 0, time() + 365*24*3600 );
          }
      }
  }
  echo "\n".$_COOKIE["theme"]."\n";
}
