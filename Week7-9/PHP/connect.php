<?php

    $conn = mysqli_connect('localhost', 'admin', '', 'testing_games');
    if (!$conn) {
        echo "No connection established with the database : ERROR";
    }   
?>