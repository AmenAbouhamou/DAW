<?php
  $id = $_GET['id'];
  $course = get_course($id); // xml
  if (!is_followed_course($id)) { add_to_followed_courses($id); }
  ob_start(); ?>

<!-- 
  affiche le cours pour l'élève
-->

<?php
  $content = ob_get_contents();
  ob_get_clean();
