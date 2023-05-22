<?php
  // is_course_owner(id_course, id_user)
  // check if the user with the given id is the owner of the test with the given id ==> boolean
if(!isset($_SESSION))
{
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
  function is_course_owner($id_course,$id_user):bool{
      return is_course_owner_model($id_course,$id_user);
   
  } 