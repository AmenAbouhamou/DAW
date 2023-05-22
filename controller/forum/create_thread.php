<?php
//create_forum(id_course,title)
//creation du forum
if(!isset($_SESSION))
{
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';

function create_forum($id_course,$titre):bool{
    $id_user=get_id($_POST["username"]);
    return create_forum_model($id_user,$id_course,$titre);
}