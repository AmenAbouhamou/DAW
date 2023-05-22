<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
$data=get_object_vars(json_decode($_POST["data"]));
if(!isset($data["password"]))
    update_user($data);
else
    update_user_password($data);
function update_user(array $user){
//    var_dump($user);
    update_user_model($user["id"],$user["email"],$user["username"],$user["niveau"],$user["role"]);
}
function update_user_password(array $user){
    update_user_password_model($user["id"],$user["username"],$user["password"]);
}