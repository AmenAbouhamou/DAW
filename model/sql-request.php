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
        $a['username']=$row['USERNAME'];
        $a['password']=$row['PASSWORD'];
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
function insert_user($firstname, $lastname, $username, $password, $role):bool{
    $conn=new ConnectionDb();
    $db=$conn->database;
    $query=$db->prepare("INSERT INTO USER(FIRSTNAME,LASTNAME,USERNAME,PASSWORD,ROLE,CREATED_AT) VALUES ('$firstname','$lastname','$username',sha2('$password',256),'$role',sysdate())");
    $returnq=$query->execute();
    $conn->closeConnection();
    return $returnq;
}

function add_followed_courses($username,$id_course):bool{
    $conn=new ConnectionDb();
    $db=$conn->database;
    $query=$db->prepare("INSERT INTO FOLLOWED_COURSE(user_id, course_id)
        VALUES ('$username','$id_course')");
    $returnq=$query->execute();
    $conn->closeConnection();
    return $returnq;
}