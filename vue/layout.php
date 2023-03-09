<!DOCTYPE html>
<html>
<?php
require_once "../controller/color_theme/get_theme.php";
?>

<head>
  <meta charset="utf-8" />
  <title><?= $title ?></title>
  <!-- CSS -->
  <?= '<link href="assets/css/' . get_theme() . '.css" rel="stylesheet" />' ?>
  <link href="assets/css/main.css" rel="stylesheet" />
  <!-- SVG favicon -->
  <link rel="icon" href="assets/img/logo.svg" />
</head>

<body>
  <header>
    <?php require_once('pages/includes/header.php'); ?>
  </header>
  <main>
    <?= $content ?>

  </main>
  <footer>
    <?php require_once('pages/includes/footer.php'); ?>
  </footer>
</body>
<script src='assets/js/jquery.js'></script>
<script src="assets/js/changetheme.js"></script>
<?php
$theme = 'light';
if (isset($_COOKIE['theme'])) {
  $theme = $_COOKIE['theme'];
}
?>

</html>
