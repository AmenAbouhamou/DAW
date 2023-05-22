<?php
// update test (form from vue/pages/includes/test/teacher.php)
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/controller/user/is_student.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/controller/courses/get_test.php';
if(!isset($_SESSION))
{
    session_start();
}
$testpost = json_decode($_POST["test"]);
$test = json_decode(json_encode($testpost), true);
$testarray=array();
foreach ($test[1]["questions"] as $questions) {
    $answerlist=array();
    foreach ($questions[1] as $question) {
        $answerarray=array();
        $answerarray["answer"]=$question[0]["answer"];
        if($question[1]["valid"])
            $question[1]["valid"]="true";
        else
            $question[1]["valid"]="false";
        $answerarray["valid"]=$question[1]["valid"];
        array_push($answerlist,$answerarray);
    }
    array_push($testarray,array("text"=>$questions[0]["text"],"answer" => $answerlist));
}
update_test($test[0]["id"],$testarray);
function update_test($i,$data):bool{

    if($i!=-1)
        test_TO_XML($data,$i);
    else
        return false;

    return true;
}

function test_TO_XML(array $data,$i)
{
    $test = new SimpleXMLElement("<test$i/>");
    array_to_xml($data,$test);
    echo $test->asXML();
}
function array_to_xml($data, &$test)
{
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            array_to_xml($value,$test);
        } else {
            if($key=="answer"){
                $test->xpath("//question[last()]")[0]->addChild($key, htmlspecialchars($value));
                $test->xpath("//question[last()]/answer[last()]")[0]->addAttribute("valid",htmlspecialchars($data["valid"]));

            }else{
                if($key=="text"){
                    $test->addChild("question");
                    $test->xpath("//question[last()]")[0]->addChild($key, htmlspecialchars($value));
                }
            }
        }
    }

    if ($test->count() > 0){
        $path=$_SERVER['DOCUMENT_ROOT']."/resources/tests/".$test->getName().".xml";
        $test->saveXML($path);
    }

}
