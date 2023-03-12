<?php
require_once 'ConnectionDb.php';
function get_user_login():array{
    /** @var ConnectionDb $conn */
    $conn=new ConnectionDb();
    $db=$conn->database;
    $query=$db->prepare("select id,username,password from user");
    $query->execute();
    $users=array();
    while ($row = $query->fetch()) {
        $a=array();
        $a['username']=$row['username'];
        $a['password']=$row['password'];
        $users[]=$a;
    }
    $conn->closeConnection();
    return $users;
}
function get_all_students():array{
    $conn=new ConnectionDb();
    $db=$conn->database;
    $query=$db->prepare("select username 
            from user where ROLE='student'");
    $query->execute();
    $users=array();
    while ($row = $query->fetch()) {
        $users[]=$row['username'];
    }
    $conn->closeConnection();
    return $users;
}