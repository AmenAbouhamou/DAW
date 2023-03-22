<?php
  $test = get_test($_GET['id']); // xml
  ob_start(); ?>

<!-- 
  Edition du test
-->

<?php
  $content = ob_get_contents();
  ob_get_clean();
