<?php
 
    //Database Connection

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "E-com_db";

    //Create a connection

    $conn = new mysqli($servername, $username, $password, $db_name);

    //Check Connection
    if ($conn->connect_error) {
        die("". $conn->connect_error);
    } else {
        //echo "Connection Successfull";
    }



?>

