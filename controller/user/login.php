<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
if(!isset($_SESSION))
{
    session_start();
}
ob_start();
$cookie_name = "logged";
if (get_login()) {
    setcookie($cookie_name, true, time() + (86400 * 30*60), "/");
} else
    echo "<script>alert('mot passe ou username bad');</script>";
header("Location: http://localhost/vue/index.php?p=login");
ob_end_flush();
function get_login(): bool
{
    $found=false;
    $userlogin = $_POST['l_username'];
    $passlogin = hash('sha256', $_POST['l_password']);
//    echo "<br>".$_POST['l_username']."  ".$_POST['l_password']."<br>";
    $userQuery = array();
    $userQuery = array_merge($userQuery, get_user_login());
    $a = array();
    for ($i = 0; $i < count($userQuery); $i++) {
        $a = array_merge($a, $userQuery[$i]);
        $username = $a["username"];
        $password = $a["password"];
        if ($username == $userlogin && $passlogin == $password){
            $_SESSION['username']=$username;
            $found=true;
        }
    }
    return $found;
}
