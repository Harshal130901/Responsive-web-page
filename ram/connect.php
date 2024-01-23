<?php
    $servername = "localhost";
    $email = "root";
    $password = "";
    $database = "harsh";
    $connect = new mysqli($servername, $email, $password, $database );
    if( $connect){
        //echo "connection ok";
    }
    else{
        echo "connection failed".mysqli_connect_error();
    }
?>
