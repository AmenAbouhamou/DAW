<?php

class ConnectionDb
{
    public $database=null;
    private $host='localhost';
    private $username='toor';
    private $password='toor';
    function __construct(){
        $this->connection();

    }
    function connection(){
        if(is_null($this->database)){
            try {
                $this->database=new PDO("mysql:host=$this->host;dbname=project",$this->username,$this->password);
                $this->database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
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