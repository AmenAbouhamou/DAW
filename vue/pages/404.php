<?php $title = "404 - Page non trouvée"; ?>

<?php ob_start(); ?>

<h1>Erreur 404</h1>
<p>La page que vous recherchez n'existe pas.</p>

<?php
$content = ob_get_contents();
require_once '../layout.php';
ob_get_clean();
?>
