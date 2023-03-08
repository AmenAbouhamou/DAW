<?php
require_once '../controller/get_color_theme.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <!-- CSS -->
    <?php if (get_color_theme()=="light") {
      echo '<link href="assets/css/light.css" rel="stylesheet" />';
    } else {
      echo '<link href="assets/css/dark.css" rel="stylesheet" />';
    }
    ?>
    <link href="assets/css/main.css" rel="stylesheet" />
    <!-- SVG favicon -->
    <link rel="icon" href="assets/img/favicon.svg" />
  </head>

  <body>
    <header>
      <?php require_once('pages/includes/header.php'); ?>
    </header>
    <main>
      <?= $content ?>
        <button id="theme" onclick="changeTheme()"class="fi fi-br-moon">
            <img src="assets/img/moon.svg" width="12" height="12">
        </button>
    </main>
    <footer>
      <?php require_once('pages/includes/footer.php'); ?>
    </footer>
  </body>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script>
      function changeTheme() {
          var theme;
          if(getCookie('theme')=="light")
              theme="dark";
          else
              theme="light";
          document.cookie = "theme=" + theme + "; path=/";
          location.reload();
          console.log(getCookie('theme'));
      }
      function getCookie(name) {
          // split cookies by semicolon
          var cookies = document.cookie.split(';');
          // loop through each cookie
          for (var i = 0; i < cookies.length; i++) {
              var cookie = cookies[i].trim();
              // check if the cookie name matches
              if (cookie.indexOf(name + '=') === 0) {
                  // return the cookie value
                  return cookie.substring(name.length + 1);
              }
          }
          // cookie not found
          return null;
      }

  </script>
  <?php
  $theme = 'light';
  if (isset($_COOKIE['theme'])) {
      $theme = $_COOKIE['theme'];
  }
  ?>
</html>
