<?php
require_once 'ConnectionDb.php';
function getUserLogin():array{
    /** @var ConnectionDb $conn */
    $conn=new ConnectionDb();
    $db=$conn->database;
    $query=$db->prepare("select id,username,password from user");
    $query->execute();
    $users=array();
    while ($row = $query->fetch()) {
        $a=array();
        $a['id']=$row['id'];
        $a['username']=$row['username'];
        $a['password']=$row['password'];
        $users[]=$a;
    }
    $conn->closeConnection();
    return $users;
}