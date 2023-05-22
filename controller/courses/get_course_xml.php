<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/controller/courses/get_course.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';

//get_course_xml(1);

function get_course_xml($id):array{
    $course=array();
    $path=$_SERVER['DOCUMENT_ROOT']."/resources/courses/course".$id.".xml";
    // Load the XML file
    if(file_exists($path)){;
        $xml = simplexml_load_file($path);
        $temp=get_course($id);
        $course=array(
            'name'=>$temp['NAME'],
            'description'=>$temp['DESCRIPTION'],
            'author'=>get_username_id($temp['AUTHOR_ID']),
            'niveau'=>$temp['NIVEAU']
        );
        $preq=array();
        foreach ($xml->children()->resource as $element) {
            $preq=array_merge($preq,array((string) $element['path']));
        }
        $course=array_merge($course,array("resource"=>$preq));

        $preq=array();
        foreach ($xml->children()->prerequisite as $element) {
            $preq=array_merge($preq,array((string) $element));
        }
        $course=array_merge($course,array("prerequisite"=>$preq));
        $course=array_merge($course,array("cour"=>$course));
    }
//    print_r($course);
    return $course;
}