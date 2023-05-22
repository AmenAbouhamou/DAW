<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
if(!isset($_SESSION))
{
    session_start();
}
ob_start();
//logout();
//echo "sdqsd<br>";
//echo isset($_COOKIE["logged"])?"true":"false"."<br>";
//echo isset($_SESSION["username"])?"true":"false"."<br>";
//echo "sqdqsd";
function logout(){
    if(isset($_COOKIE["logged"])){
        echo "<br>test11<br>";
        setcookie('logged', false, 1, "/");
        unset($_COOKIE['logged']);
        $_SESSION = array();
        session_destroy();

    }
}
ob_flush();

