<?php 

    $mysqli1 = new mysqli("localhost", "admin", "", "testing_games");
    $mysqli2 = new mysqli("localhost", "admin", "", "planned_games");

    if ($mysqli1 -> connect_errno) {
        echo "Failed to connect to MySQL -> testing_games: " . $mysqli1 -> connect_error;
        exit();
    }

    if ($mysqli2 -> connect_errno) {
        echo "Failed to connect to MySQL -> planned_games: " . $mysqli2 -> connect_error;
        exit();
    }
?>