<?php

require_once '../../model/sql-request.php';
// create_user(firstname, lastname,username,password, role)
//             \_______________strings_____________/
// role: true = teacher, false = student
session_start();
$cookie_name = "logged";
if (create_user()) {
    echo "  user created";
} else
    echo "<script>alert('mot passe ou username bad');</script>";

function create_user():bool{
    $firstname=$_POST["r_firstname"];
    $lastname=$_POST["r_lastname"];
    $username=$_POST["r_username"];
    $password=$_POST["r_password"];
    $role=$_POST["r_role"];
    return insert_user($firstname,$lastname,$username,$password,$role);
}