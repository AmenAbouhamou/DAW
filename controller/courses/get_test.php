<?php
// get_test(id)
// get the test with the given id
if(!isset($_SESSION))
{
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
function get_test($id):array{
  return get_test_model($id);
}