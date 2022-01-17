<?php

    echo "<div class='planned'>
        <h2>Planned Games</h2>
    </div>";

    $sqlQuery1 = "SELECT * FROM planned";
    $result1 = mysqli_query($conn, $sqlQuery1);

    if (!$conn) {
        echo 'Connection failed: ' . $conn->connect_error;
    } else {

        while($row = mysqli_fetch_array($result1)) {

            
            $textQuery = "SELECT description FROM games WHERE name=$name";

            echo "<div class='plannedGame'>
                <h3>".$row['Name']."</h3>
                <p>".$row['Time']."</p>
                <p>".$row['Pers1']."</p>
                <p>".$row['Pers2']."</p>

                <a href='PHP/getData.php?name=$name&text=$text'>View</a>
            </div>";

            echo '<br>';
        }
    }
    

?>