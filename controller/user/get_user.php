<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
if(!isset($_SESSION))
{
    session_start();
}

//print_r(get_user("charle"));

function get_user($username):array{
    $users=array();
    $user=array();
    $users = array_merge($users,get_users_model());
    $found=false;
    $i=0;
    while(!$found && $i < count($users)){
        $a=array();
        $a = array_merge($a, $users[$i]);
        if ($a["USERNAME"] == $username){
            $user=array_merge($user,$a);
            $found=true;
        }
        $i++;
    }
    return $user;
}