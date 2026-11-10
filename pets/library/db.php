<?php

function connect() {
    // Login gubbins
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, "pets");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); // Error message
    }
    
    return $conn;
}

?>