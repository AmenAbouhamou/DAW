<?php
  $test = get_test($_GET['id']); // xml
  ob_start(); ?>

<!-- 
  Affiche le test pour l'élève
-->

<?php
  $content = ob_get_contents();
  ob_get_clean();
