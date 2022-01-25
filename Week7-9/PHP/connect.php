<?php

    //New user in phpmyadmin
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "testing_games";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else { 
        echo "<script>console.log('Connected successfully')</script>";
    }

?>