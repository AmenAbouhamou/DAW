<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
if(!isset($_SESSION))
{
    session_start();
}
// return true if the user is logged in as a student
function is_student():bool{
    $userlogin=$_SESSION["username"];
    $userQuery = array();
    $userQuery = array_merge($userQuery, get_all_roles_username('student'));
    for ($i = 0; $i < count($userQuery); $i++) {
        $username = $userQuery[$i];
        if ($username == $userlogin )
            return true;
    }
    return false;
}