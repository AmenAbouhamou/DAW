<?php
//get_messages_forum($id_forum)
//return the all messages of a forum
require_once $_SERVER["DOCUMENT_ROOT"].'/model/sql-request.php';
//print_r(get_messages_forum(1));
function get_messages_forum($forum_id):array{
    $forum_msg=array();
    $forum_msg=array_merge($forum_msg,get_messages_forum_model($forum_id));
//    var_dump($forum_msg);
    return $forum_msg;
}