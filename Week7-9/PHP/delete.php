<?php

    require 'connect.php';

    if (!$conn) {
        echo 'Connection failed: ' . $conn->connect_error;
    } else {
        $id = $_GET['varname'];

        $deleteQuery = "DELETE FROM planned WHERE gameID='".$id."'";
        $deleteResult = mysqli_query($conn, $deleteQuery);

        if (!$deleteResult) {
            echo "Error deleting record: " . mysqli_error($conn);
        } else {
            echo "Record deleted successfully";
            echo "<br>";
            echo "<a href='../index.php'>Return to Homepage</a>";
        }
    }

?>