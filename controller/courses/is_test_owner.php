<?php
  // is_test_owner(id_test, id_user)
  // check if the user with the given id is the owner of the test with the given id ==> boolean
if(!isset($_SESSION))
{
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
  function is_test_owner($id_test):bool{
      $id_user=get_ID_User($_SESSION["username"]);
      return is_test_owner_model($id_test,$id_user);
  } 