<?php
  $course = get_course($_GET['id']); // xml
  ob_start(); ?>

<!-- 
  Edit course
-->

<?php
  $content = ob_get_contents();
  ob_get_clean();
