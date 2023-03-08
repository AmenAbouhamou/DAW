<?php
$title = "Home";
?>

<?php ob_start(); ?>

<h1>Home</h1>
<p>Vous n'avez pas accès à cette page.</p>

<?php
$content = ob_get_contents();
ob_get_clean();
?>
<?php
ob_start();
?>

<?php
echo $_COOKIE["theme"];
$script = ob_get_contents();
ob_get_clean();
?>

