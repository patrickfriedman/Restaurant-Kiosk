<?php

function Connect()
{
    //Define conection variables
    $servername = "gator4242.hostgator.com";
    $username = "tadjoe96_matt";
    $password = "password";
    $dbname = "tadjoe96_RestaurentDB";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

	return $conn;
}
?>