<?php
//send_message_forum($id_forum,$message)
//send the message to a forum
if(!isset($_SESSION))
{
    session_start();
}
require_once $_SERVER["DOCUMENT_ROOT"].'/model/sql-request.php';
$data=get_object_vars(json_decode($_POST["data"]));

echo send_message_forum($data["forumid"],$data["message"]);

function send_message_forum($id_forum,$message):bool{
    $id_user=get_ID_User($_SESSION['username']);
    return send_message_forum_model($id_forum,$message,$id_user);
}
