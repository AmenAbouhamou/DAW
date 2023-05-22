<?php
// get_followed_courses()
// get the courses followed by the user 
// return an array of courses
if(!isset($_SESSION))
{
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
function get_followed_courses():array{
    return get_followed_courses_model();
} 
