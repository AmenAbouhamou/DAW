<?php
// get_course(id)
// get the course with the given id
if(!isset($_SESSION))
{
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';

function get_course($id):array{
    return get_course_model($id);
 
}