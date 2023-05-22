<?php
$page_dir = '../vue/pages';
$page = isset($_GET['p']) ? $_GET['p'] : 'home';
if($page=="courseOneT")
    $page="includes/course/teacher/one";
else
    if($page=="courseListT")
        $page="includes/course/teacher/list";
    else
        if($page=="courseListS")
            $page="includes/course/student/list";
        else
            if($page=="courseOneS")
                $page="includes/course/student/one";
if($page=="testT")
    $page="includes/test/teacher";
else
    if($page=="testS")
        $page="includes/test/student";
if($page=="admin")
    $page="includes/account/admin";
else
    if($page=="adminuser")
        $page="includes/account/user";
if($page=="forumlist")
    $page="includes/forum/list";
else
    if($page=="adminuser")
        $page="includes/account/user";
if (file_exists($page_dir . '/' . $page . '.php')) {
  // Page
  require_once($page_dir . '/' . $page . '.php');
} else {
  // 404
  require_once($page_dir . '/404.php');
}

require_once('layout.php');
