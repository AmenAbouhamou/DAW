<?php
// $files = glob(__DIR__ . "../controller/*/*.php");
// foreach ($files as $file) {
//   require_once($file);
// }
// $page_dir = 'pages';
// $page = isset($_GET['p']) ? $_GET['p'] : 'home';
// if (file_exists($page_dir . '/' . $page . '.php')) {
//   // Page
//   require_once($page_dir . '/' . $page . '.php');
// } else {
//   // 404
//   require_once($page_dir . '/404.php');
// }

// require_once('layout.php');

require_once "../model/ConnectionDb.php";
$conn=new ConnectionDb();