<?php
    $host= "localhost";
    $user= "root";
    $pass="";
    $db = "mydb1";
    $conn = new mysqli($host,$user,$pass,$db);
    if ($conn->connect_error) {
        die('connection failed error '.$conn->connect_error);
    }
?>