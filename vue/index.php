<?php
$page_dir = '../vue/pages';
$page = $_GET['p'];
if (isset($page) && $page !== '') {
  if (file_exists($page_dir . '/' . $page . '.php')) {
    // Page
    require_once($page_dir . '/' . $page . '.php');
  } else {
    // 404
    require_once($page_dir . '/404.php');
  }
} else {
  // Home : default
  require_once($page_dir . '/home.php');
}

require_once('layout.php');
