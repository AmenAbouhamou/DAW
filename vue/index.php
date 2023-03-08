<?php
require_once "../controller/is_connected.php";
$page_dir = '../vue/pages';
setcookie("theme", "light", time() + 365*24*3600,"/");
if(!isset($_GET['p'])){
    // Home : default
    $_GET['p']='home';
}
$page = $_GET['p'];
if (isset($page) && $page !== '') {
  if (file_exists($page_dir . '/' . $page . '.php')) {
      if($page!="home"&& $page!="login"&&!is_connected()){
          // 403
          $page="403";
      }
    // Page
    require_once($page_dir . '/' . $page . '.php');
  } else {
    // 404
    require_once($page_dir . '/404.php');
  }
}
require_once('layout.php');
