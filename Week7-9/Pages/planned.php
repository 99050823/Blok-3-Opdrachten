<?php

    echo "<div class='planned'>
        <h2>Planned Games</h2>
    </div>";

    $getPlannedQuery = "SELECT * FROM planned LEFT JOIN games ON play_minutes WHERE gameName=name";
    $getPlannedResult = mysqli_query($conn, $getPlannedQuery);

    if (!$conn) {
        echo 'Connection failed: ' . $conn->connect_error;
    } else {

        while($row = mysqli_fetch_array($getPlannedResult)) {
                
            echo "<div class='plannedGame'>
                <h3>".$row['name']."</h3>

                <ul>
                    <li>Start Time : ".$row['start']."</li>
                    <li>Duration : ".$row['play_minutes']." Minutes</li>
                    <li>Leader : ".$row['lead']."</li>
                </ul>

                <div>
                    <a href='Pages/edit.php?varname=".$row['gameID']."'>Edit</a>
                    <a href='Pages/view.php?varname=".$row['name']."&varid=".$row['gameID']."'>View</a>
                </div>
            </div>";   

            echo '<br>';
        }
    }

?>
