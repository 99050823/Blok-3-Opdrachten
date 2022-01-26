<?php

    echo "<h2 class='planned-title'>Planned Games</h2>";
    echo "<div class='planned'>";

    $getPlannedQuery = "SELECT * FROM planned LEFT JOIN games ON play_minutes WHERE gameName=name ORDER BY `start` ASC";
    $getPlannedResult = mysqli_query($conn, $getPlannedQuery);

    $amount = mysqli_num_rows($getPlannedResult);

    if (!$conn) {
        echo 'Connection failed: ' . $conn->connect_error;
    } else if($amount <= 0){
        echo "No planned games";
    } else {

        while($row = mysqli_fetch_array($getPlannedResult)) {
                
            echo "<div class='plannedGame'>
                <div>
                    <a id='delete'><i class='fas fa-trash'></i></a>
                    <h3>".$row['name']."</h3>
                </div>

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

    echo "</div>";

?>
