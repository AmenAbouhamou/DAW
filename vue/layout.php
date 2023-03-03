<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <!-- CSS -->
    <?php if (get_color_theme()) { ?>
      <link href="assets/css/light.css" rel="stylesheet" />
    <?php } else { ?>
      <link href="assets/css/dark.css" rel="stylesheet" />
    <?php } ?>
    <link href="assets/css/main.css" rel="stylesheet" />
    <!-- SVG favicon -->
    <link rel="icon" href="assets/img/favicon.svg" />
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
</html>
