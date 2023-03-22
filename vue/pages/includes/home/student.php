<?php
  ob_start(); ?>

<div>
  <button id="show-courses"><a href="index.php?p=course">Afficher mes cours</a></button>
  <button id="show-courses"><a href="index.php?p=forum">Afficher les forums</a></button>
</div>

<?php
  $content = ob_get_contents();
  ob_get_clean();
