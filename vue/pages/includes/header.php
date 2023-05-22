<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/controller/color_theme/get_theme.php";
  require_once $_SERVER['DOCUMENT_ROOT'] . "/controller/user/is_connected.php";
  ?>

<div><a href="./index.php?p=home"><img src=<?= "/vue/assets/img/logo" . get_theme() . ".svg" ?> alt="logo"
      height="100" /></a></div>
<nav>
  <a class="header-button"><button id="theme" onclick="changeTheme()"><?= '<img src="assets/img/' . get_theme() . '.png" width="16" height="16">' ?></button></a>
  <?php
  if (is_connected()) {
    echo '<a class="header-button" href="./index.php?p=account"><button>Mon Compte</button></a>';
    echo '<a class="header-button" href="./index.php?p=logout"><button>Déconnexion</button></a>';
  } else {
    echo '<a class="header-button" href="./index.php?p=login"><button>Connexion</button></a>';
  }
  ?>
</nav>
