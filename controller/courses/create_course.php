<?php
// create_course(name, desc)
if(!isset($_SESSION))
{
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';

create_course($_POST["name"],$_POST["prerequisite"],$_POST["description"],$_POST["path"]);

function create_course($name,array $prerequisite,$description,array $resource):bool{
    $temp=array();
    foreach ($resource as $item) {
        echo $item."<br>";
        $ext = pathinfo($item, PATHINFO_EXTENSION);
        if($ext == "ppt" || $ext == "pptx")
            $type="slide";
        else{
            if ($ext == "mp4" || $ext == "avi")
                $type="video";
            else
                if($ext=="pdf")
                    $type="pdf";
                else
                    $type="unkown";
        }
        $temp=array_merge($temp,
            array(array(
            "resource"=>$item,
            "type"=>$type
        )));
//        array_push($temp,$item);
    }
        // print_r($temp);print_r($resource);
    $resource=$temp;
    $temp=array();
    foreach ($prerequisite as $item) {
        echo $item."<br>";
        $temp=array_merge($temp,
            array(array(
                "prerequisite"=>$item
            )));
//        array_push($temp,$item);
    }
    // print_r($temp);print_r($prerequisite);
    $prerequisite=$temp;
    $data=array(
        "cour" => array(
            'name'=>"$name",
            'resource' => $resource,
            'prerequisite'=> $prerequisite
        )
    );
    $i=create_course_model($name,$description);
    course_TO_XML($data,$i);
    return true;
}
//Create a Course into a XML File
function course_TO_XML(array $data,$i)
{
    $cour = new SimpleXMLElement("<course$i/>");
    array_to_xml($data,$cour);
//    print_r($data);
    echo $cour->asXML();
}
function array_to_xml($data, &$cour)
{
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            // If the value is an array, create a new element and call the function recursively
            array_to_xml($value,$cour);
        } else {
            // If the value is not an array, add it as a child element
            if($key=="resource"){
                $cour->addChild("resource");
                $cour->xpath("//resource[last()]")[0]->addAttribute("type",htmlspecialchars($data["type"]));
                $cour->xpath("//resource[last()]")[0]->addAttribute("path",htmlspecialchars($value));

            }else{
                echo "no";
                if($key!="type" && $key!="path")
                    $cour->addChild($key, htmlspecialchars($value));
            }
        }
    }
    if ($cour->count() > 0){
        $path="../../resources/courses/".$cour->getName().".xml";
        echo $cour->saveXML($path);
    }
}