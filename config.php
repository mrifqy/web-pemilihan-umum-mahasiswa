<?php
        $hostname="localhost";
        $username="root";
        $password="";
        $database="pemilu";

        $connection=new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            die('Connection error'. $connect->connect_error);
        }
        // else echo "success";
?>