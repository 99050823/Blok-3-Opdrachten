<?php 

    $mysqli1 = new mysqli("localhost", "admin", "", "testing_games");

    if ($mysqli1 -> connect_errno) {
        echo "Failed to connect to MySQL -> testing_games: " . $mysqli1 -> connect_error;
        exit();
    }
?>