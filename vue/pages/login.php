<?php
$title = "Login";
?>

<?php ob_start(); ?>
<form method="post" action="../controller/login.php">
    <label for="username">Username</label><input type="text" id="username" name="username"><br>
    <label for="password">Password</label><input type="password" id="password" name="password">
    <input type="submit" value="Send">
</form>

<?php
$content = ob_get_contents();
ob_get_clean();
?>

<?php
$script = ob_get_clean();
?>