<?php
// get_id(////////////////////)
// return the id of the user
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
//session_start();

function get_id($username):int{
    return get_ID_User($username);
}