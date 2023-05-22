<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
// create_user(firstname, lastname,username,password, role)
//             \_______________strings_____________/
// role: true = teacher, false = student
if(!isset($_SESSION))
{
    session_start();
}
$cookie_name = "logged";
create_user();
ob_start();
header("Location: http://localhost/vue/index.php?p=login");
ob_get_clean();
function create_user():bool{
    $firstname=$_POST["r_firstname"];
    $lastname=$_POST["r_lastname"];
    $username=$_POST["r_username"];
    $password=$_POST["r_password"];
    $role=$_POST["r_role"];
    // echo $role;
    return insert_user($firstname,$lastname,$username,$password,$role);
}
