<?php 
  $title = "Home";
  if (!is_connected()) {
    require_once("includes/home/nobody.php");
  } else if (is_student()) {
    require_once("includes/home/student.php");
  } else {
    require_once("includes/home/teacher.php");
  }
