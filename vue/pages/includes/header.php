<div>
<!--  --><?php //= '<img src="assets/img/' . get_theme() . '.png" width="15" height="15">' ?>
  <img src="assets/img/favicon.svg" alt="" height="20">
</div>

<div>
  <nav>
    <ul>
      <li>
        <a href="index.php?p=home">Retour à l'accueil</a>
      </li>
      <li>
        <?php
        require_once "../controller/user/is_connected.php";
        if (is_connected()) {
          echo '<a href="index.php?p=logout">Déconnexion</a>';
        } else {
          echo '<a href="index.php?p=login">Connexion</a>';
        }
        ?>
      </li>
    </ul>
  </nav>
  <button id="theme" onclick="changeTheme()">
    <?= '<img src="assets/img/' . get_theme() . '.png" width="15" height="15">' ?>
  </button>
</div>
