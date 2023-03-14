<?php
// get_id(////////////////////)
// return the id of the user
require_once '../../model/sql-request.php';
session_start();
//$id=get_id('charle');
//if($id==-1){
//    echo "<script>console.log(' NOT ok $id')</script>";
//}else
//    echo "<script>console.log('Ok  $id')</script>";

function get_id($username):int{
    $id=get_ID_User($username);
    return $id;
}