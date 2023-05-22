<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/user/is_connected.php";
require_once $_SERVER['DOCUMENT_ROOT']."/controller/user/is_student.php";
require_once $_SERVER['DOCUMENT_ROOT']."/controller/user/is_teacher.php";
require_once $_SERVER['DOCUMENT_ROOT']."/controller/user/is_admin.php";
  $title = "Home";
  if (!is_connected()) {
    require_once("includes/home/nobody.php");
  } else if (is_student()) {
    require_once("includes/home/student.php");
  } else if (is_teacher()){
    require_once("includes/home/teacher.php");
  }else if (is_admin()){
      require_once("includes/account/admin.php");
  }
