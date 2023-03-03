<?php
    $title = "403 - Accès interdit";
    ?>

<?php ob_start(); ?>

<h1>Erreur 403</h1>
<p>Vous n'avez pas accès à cette page.</p>

<?php
    $content = ob_get_contents();
    require_once '../layout.php';
    ob_get_clean();
?>
