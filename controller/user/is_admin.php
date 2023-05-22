<?php
// is_admin()
// true if the user is an admin, false otherwise
if(!isset($_SESSION))
{
    session_start();
}
require_once $_SERVER["DOCUMENT_ROOT"].'/model/sql-request.php';

function is_admin():bool{
    $userlogin=$_SESSION["username"];
    $userQuery = array();
    $userQuery = array_merge($userQuery, get_all_roles_username('3'));
    for ($i = 0; $i < count($userQuery); $i++) {
        $username = $userQuery[$i];
        if ($username == $userlogin )
            return true;
    }
    return false;
}
