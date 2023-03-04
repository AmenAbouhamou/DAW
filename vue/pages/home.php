<?php
$title = "Home";
?>

<?php ob_start(); ?>

<h1>Home</h1>
<p>Vous n'avez pas accès à cette page.</p>

<?php
$content = ob_get_contents();
require_once '../layout.php';
ob_get_clean();
?>
