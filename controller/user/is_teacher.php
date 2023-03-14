<?php
// return true if the user is logged in as a teacher
require_once '../../model/sql-request.php';
session_start();
function is_teacher():bool{
    $userlogin=$_SESSION["username"];
    $userQuery = array();
    $userQuery = array_merge($userQuery, get_all_roles('teacher'));
    for ($i = 0; $i < count($userQuery); $i++) {
        $username = $userQuery[$i];
        if ($username == $userlogin )
            return true;
    }
    return false;
}