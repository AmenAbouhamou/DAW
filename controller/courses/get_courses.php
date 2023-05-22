<?php
// get_courses(owner_id)
// get the courses owned by the user with the given id
//function get_courses(owner_id):{}
if(!isset($_SESSION))
{
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
function get_courses($owner_id):array{
    return get_courses_model($owner_id);
}
function get_all_courses():array{
    return get_all_courses_model();
}
