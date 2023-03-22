<?php
require_once "../controller/user/is_connected.php";
require_once "../controller/user/is_student.php";
  if (!is_connected()) {
    header('Location: index.php?p=login');
  }
  $title = "Course";
  $id = $_GET['i'];
  if (isset($id) && !course_exists($id)) {
    header('Location: index.php?p=404');
  }
  if (is_student()) {
    if (!isset($id)) {
      require_once("includes/course/student/list.php");
    } else {
      require_once("includes/course/student/one.php");
    }
  } else {
    if (!isset($id)) {
      require_once("includes/course/teacher/list.php");
    } else {
      if (is_course_owner($id)) {
        require_once("includes/course/teacher/one.php");
      } else {
        header('Location: index.php?p=404');
      }
    }
  }
  