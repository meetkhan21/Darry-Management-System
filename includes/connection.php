<?php

        $host = "localhost";
        $dbname = "milk";
        $user = "root";
        $password = "";
        
        $connection = mysqli_connect($host , $user, $password, $dbname);
        if(!$connection){
            echo "alert('Incorrect Password ! Contact Admin')".die("Connection could not be established. Contact Admin");
            return ;
        }
 ?>