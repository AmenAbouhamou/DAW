<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/courses/get_course_xml.php";
require_once $_SERVER['DOCUMENT_ROOT']."/controller/courses/edit_course.php";
$id = $_GET['id'];
$targetDir = $_SERVER['DOCUMENT_ROOT']."/resources/courses/media/";
$targetFile = $targetDir . basename($_FILES["new_ressource"]["name"]);
$course_xml = get_course_xml($id); // xml

if (!is_dir($targetDir)) {
    mkdir($targetDir);
}

if (is_uploaded_file($_FILES["new_ressource"]["tmp_name"])) {
    if (move_uploaded_file($_FILES["new_ressource"]["tmp_name"], $targetFile)) {
//        echo "The file ". basename( $_FILES["new_ressource"]["name"]). " has been uploaded.";
        $course_xml["resource"][]="../resources/courses/media/".$_FILES["new_ressource"]["name"];
        edit_course($id,$course_xml["name"],$course_xml["prerequisite"],$course_xml["resource"]);
        ob_start();
        header("Location: http://localhost/vue/index.php?p=course&id=".$id."");
        ob_get_clean();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "Sorry, invalid file upload attempt.";
}

