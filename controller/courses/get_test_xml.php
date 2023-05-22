<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/controller/courses/get_test.php';
//get_test_xml(2);
function get_test_xml($id):array{
    $test=array();
    $path=$_SERVER['DOCUMENT_ROOT']."/resources/tests/test".$id.".xml";
    // Load the XML file
    if(file_exists($path)){
        $temp=get_test($id);
        $test=array(
            'name'=>$temp['NAME'],
            'course'=>$temp['COURSE_ID']
        );
        $xml = simplexml_load_file($path);
        $question=array();
        foreach ($xml->children() as $element) {
            $text=array(
                'text' => (string) $element->text
            );
            $answer_master=array();
            foreach ($element->answer as $answer) {
                $answer_array=array(
                    'answer'=>(string) $answer,
                    'valid'=>(string) $answer['valid']
                );
                $answer_master=array_merge($answer_master,array($answer_array));
            }
            $text=array_merge($text,array('answer'=>$answer_master));
            $question=array_merge($question,array($text));

        }
        $test=array_merge($test,array(
            'question'=>$question
        ));
    }
    return $test;
}