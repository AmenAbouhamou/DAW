<?php
  if (!is_connected()) {
    header('Location: index.php?p=login');
  }
  $title = "Test";
  $id = $_GET['i'];
  if ((isset($id) && !test_exists($id)) || !isset($id)) {
    header('Location: index.php?p=404');
  }
  if (is_student()) {
    require_once("includes/test/student.php");
  } else {
    if (is_test_owner($id)) {
      require_once("includes/test/teacher.php");
    } else {
      header('Location: index.php?p=404');
    }
  }
