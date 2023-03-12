<?php
require_once ".config";
class ConnectionDb
{
    public $database=null;
    private $host=HOST;
    private $username='root';
    private $password='root';
    function __construct(){
        $this->connection();

    }
    function connection(){
        if(is_null($this->database)){
            try {
                $this->database=new PDO("mysql:host=$this->host;dbname=project",$this->username,$this->password);
                $this->database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                print("connection opened ");
            }catch (PDOException $e){
                print("connection failed : ".$e->getMessage());
            }
        }
    }
    function closeConnection(){
        unset($this->database);
        $this->database=null;
    }


}