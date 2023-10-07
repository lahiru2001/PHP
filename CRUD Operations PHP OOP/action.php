<?php

    include("classes1.php");

    $obj = new DataOperations;

    if(isset($_POST["submit"]))
    {
        $myarray = array(
            "name" => $_POST["name"],
            "email" => $_POST["email"],
            "password" => $_POST["password"]
        );

        if ($obj->insert_record("user", $myarray)) {
            
            header("location:index1.php?msg=Record inserted");
        }else
        {
            header("location:index1.php?msg=inserted Error");
        }
          
    }

    $sql=$obj->fetch_record("user");

?>