<?php
require_once "../controller/user/is_connected.php";
require_once "../controller/user/is_student.php";
$title = "Forum";
  if (!is_connected()) {
    header('Location: index.php?p=login');
  }
  if (!isset($_GET['id'])) {
    require_once("includes/forum/list.php");
  }else {
    require_once("includes/forum/thread.php");
  }
