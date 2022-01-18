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

            $name = $row['Name'];

            echo "<div class='plannedGame'>
                <h3>".$name."</h3>
                <p>".$row['Start']."</p>
                <p>".$row['Start']."</p>
                <p>".$row['Leader']."</p>

                <a href='./Pages/gameInfo.php?name=$name'>View</a>
            </div>";

            echo '<br>';
        }

        echo "<form action='' method='POST'>
            <input id='clear' type='submit' value='Clear List' name='clear'>
        </form>";
    }

    $clearBttn = $_POST['clear'];

    if ($clearBttn) {
        $clearQuery = "DELETE FROM planned";
        $clearResult = mysqli_query($conn, $clearQuery);
    }
?>