<?php

    $sqlQuery2 = "SELECT * FROM games WHERE name='".$_GET['planned_name']."'";
    $result2 = mysqli_query($conn, $sqlQuery2);

    if ($row = mysqli_fetch_object($result2)) {
        
        echo "<div>$row->description</div>";
    } else {
        echo "ERROR";
    }
?>