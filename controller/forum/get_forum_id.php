<?php
//get_forum_id(id_forum)
//return the forum and his messages by his id
require_once $_SERVER["DOCUMENT_ROOT"].'/model/sql-request.php';
//print_r(get_forum_id(9));
function get_forum_id($id_forum):array{
    return get_forum_id_model($id_forum);
}
