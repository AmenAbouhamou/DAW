<?php
// get_course_desc(id)
// get the course description with the given id
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
function get_course_desc($id):string{
    return get_course_model($id)["DESCRIPTION"];
}


