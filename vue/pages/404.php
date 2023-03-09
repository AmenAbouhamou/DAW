<?php 
  $title = "404 - Page non trouvée";
  ob_start(); ?>

<h1>Erreur 404</h1>
<p>La page que vous recherchez n'existe pas.</p>

<a href="index.php?p=home">Retour à l'accueil</a>

<?php
  $content = ob_get_contents();
  ob_get_clean();
