<?php
require_once '../model/sql-request.php';
session_start();
if (get_login()) {
    echo "<script>alert('mot passe ou username error');</script>";
} else
    echo "<script>alert('mot passe ou username good');</script>";


function get_login(): bool
{
    $userlogin = $_POST['username'];
    $passlogin = hash('sha256', $_POST['password']);

    $userQuery = array();
    $userQuery = array_merge($userQuery, getUserLogin());
    $a = array();
    for ($i = 0; $i < count($userQuery); $i++) {
        $a = array_merge($a, $userQuery[$i]);
        $id = $a["id"];
        $username = $a["username"];
        $password = $a["password"];
        if ($username == $userlogin && $passlogin == $password)
            return true;
    }
    return false;
}
