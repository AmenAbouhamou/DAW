<?php
  $couses = get_followed_courses(); // array of courses
  ob_start(); ?>

<!-- 
  Liste des cours suivis par l'élève connecté
-->

<?php
  $content = ob_get_contents();
  ob_get_clean();
