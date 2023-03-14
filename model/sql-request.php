<?php
require_once 'ConnectionDb.php';
function get_user_login():array{
    /** @var ConnectionDb $conn */
    $conn=new ConnectionDb();
    $db=$conn->database;
    $query=$db->prepare("select USERNAME,PASSWORD from USER");
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
function get_ID_User($username):int{
    $conn=new ConnectionDb();
    $db=$conn->database;
    $query=$db->prepare("select ID FROM USER where USERNAME='$username'");
    $query->execute();
//    while($row = $query->fetch()) {
//            echo "id: " . $row["ID"]. "<br>";
//    }
    $id=$query->fetch()['ID'];
    $conn->closeConnection();
    return $id;
}
function get_all_roles($role):array{
    $conn=new ConnectionDb();
    $db=$conn->database;
    $query=$db->prepare("select username FROM USER where ROLE='$role'");
    $query->execute();
    $users=array();
    while ($row = $query->fetch()) {
        $users[]=$row['username'];
    }
    $conn->closeConnection();
    return $users;
}