<?php
require_once "../controller/user/is_connected.php";
require_once "../controller/user/is_admin.php";
  if (!is_connected()) {
    header('Location: index.php?p=login');
  }
  $title = "User Account";
  if (is_admin()) {
    $title = "Accounts";
    require_once("includes/account/admin.php");
  } else {
    require_once("includes/account/user.php");
  }
  