<?php
  ob_start(); ?>

<!-- 
  Liste des cours suivis par l'élève connecté puis les cours non suivis
-->

<?php
  $content = ob_get_contents();
  ob_get_clean();
