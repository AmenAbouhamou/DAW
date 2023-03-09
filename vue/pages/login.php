<!--
  - Si l'utilisateur est déjà connecté : rediriger vers home
  - sinon, juste affiche le formulaire pour se connecter
-->
<?php
  if (is_connected()) {header('Location: index.php?p=home');}
  $title = "Login";
  ob_start(); ?>

<?php
  $content = ob_get_contents();
  ob_get_clean();
