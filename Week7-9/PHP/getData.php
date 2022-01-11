<?php

    $arrNames = array();
    $sqlQuery2 = "SELECT * FROM planned";

    if($result = mysqli_query($mysqli1, $sqlQuery2)) {
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {

                echo "<div class='plannedGame'>
                    <h3>".$row['Name']."</h3>
                    <p>".$row['Time']."</p>
                    <p>".$row['Pers1']."</p>
                    <p>".$row['Pers2']."</p>
                </div>";

                echo "<br>";

                array_push($arrNames, $row['Name']);
            }

        } else { 
            echo "<script>
                console.log('No records found');
            </script>";
        }
    } else {
        echo "<script>
            console.log('ERROR: Could not execute querry');
        </script>";
    }

?>