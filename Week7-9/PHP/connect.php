<?php 

    $conn = mysqli_connect("localhost", "admin", "", "testing_games");

    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL -> testing_games: " . $mysqli1 -> connect_error;
        exit();
    }
?>