<?php
//get_users()
//return the all the users

require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
//var_dump(get_users());
function get_users():array{
    return get_users_model();
}