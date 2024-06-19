<?php

    $database= new mysqli("localhost","root","","tena_hms");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>