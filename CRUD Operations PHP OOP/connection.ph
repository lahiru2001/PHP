<?php

class database{
    private $hostname ="localhost";
    private $username ="root";
    private $password ="";
    private $dbname ="ida";
    public $conn;



    function __construct()
    {
        $this->conn = new mysqli($this->hostname,$this->username,
        $this->password,$this->dbname);

        if($this->conn->connect_error)
        {
            echo "connection Error";
        }else
        {
            echo "connection sucess";
        }

    }
}

$obj = new database;

?>
