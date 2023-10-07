<?php

    include("connection.php");


 class DataOperations extends database{

        public function insert_record($table,$values)
        {
            //insert into user (name,email,password) values ("",lahiru.email.com,123);
    
            $sql = "INSERT INTO ".$table;
            $sql .=" (".implode(",", array_keys($values)).") VALUES ";
            $sql .="('".implode("','",array_values($values))."')";

           
    
           // $query =mysqli_query($conn,$sql);
            $query =$this->conn->query($sql);

           if($query) {
                return true;
           } else {
                return false;
            }

        
        }
    
    
        public function fetch_record($table)
        {

            $sql = "SELECT * FROM ".$table;
            $array = array();

            $query = $this->conn->query($sql);

            while($row = $query->fetch_assoc())
            {
                $array[] = $row;
            }

            return $array;

        }

    }

   









?>

