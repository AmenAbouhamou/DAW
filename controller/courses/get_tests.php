<?php
// get_tests(course_id)
// get the tests in the course with the given id
if(!isset($_SESSION))
{
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
function get_tests($course_id):array{
  return get_tests_model($course_id);
}