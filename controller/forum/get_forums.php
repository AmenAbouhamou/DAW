<?php
//get_forums()
//return the all forums
require_once $_SERVER["DOCUMENT_ROOT"].'/model/sql-request.php';
//print_r(get_forums());
function get_forums():array{
    $username = $_SESSION['username'];
    $user_id = get_ID_User($username);
    return get_forums_model($user_id );
}