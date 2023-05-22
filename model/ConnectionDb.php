<?php
require_once "config.php";
class ConnectionDb
{
    public $database=null;
    private $host=HOST;
    private $username=USERNAME;
    private $password=PASSWORD;
    private $port=PORT;
    function __construct(){
        $this->connection();

    }
    function connection(){
        if(is_null($this->database)){
            try {
                $this->database=new PDO("mysql:host=$this->host;port=$this->port;dbname=project",$this->username,$this->password);
                $this->database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//                print("connection opened ");
            }catch (PDOException $e){
                print("Connection Failed : ".$e->getMessage());
            }
        }
    }
    function closeConnection(){
        unset($this->database);
        $this->database=null;
    }


}