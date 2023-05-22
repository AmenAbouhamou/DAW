<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/sql-request.php';
$id=$_POST["deleteuserid"];
delete_user($id);
function delete_user($id){
//    $data = json_decode($_POST["data"]);
//    $name = $data->name;
//    $age = $data->age;
//    echo $name."   ".$age." \n";

//    $id=$_POST["deleteuserid"];
//    echo "<script>console.log('ciao  '+$id)</script>";
    delete_user_model($id);
}