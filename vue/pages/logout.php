<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/user/logout.php";
$title = "Logout";
logout();
header('Location: index.php?p=home');
