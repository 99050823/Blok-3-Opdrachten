<?php

    $conn = mysqli_connect('localhost', 'root', '!Welkom420', 'games'); 

    // query 1 exists on "getFormData.php"
    $sqlQuery2 = mysqli_query($conn, "SELECT * FROM gamesdata"); 
    $sqlQuery3 = mysqli_query($conn, "SELECT * FROM game_names_pic");
    // query 4 exists in "getFormData.php"

    if (!$conn) {
        echo "Not connected to the DataBase";
    } 
?>