<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <div class="main-div">

        <?php
        
            require '../PHP/connect.php';

            if (!$conn) {
                echo 'Connection failed: ' . $conn->connect_error;
            } else {

                $name = $_GET['varname'];

                $getInfoQuery = "SELECT games.*, planned.*
                FROM planned RIGHT JOIN games ON games.gameName = '".$name."'";  

                $getInfoResult = mysqli_query($conn, $getInfoQuery);
                mysqli_query($conn, $getInfoQuery) or die(mysqli_error($conn));
                if ($row = mysqli_fetch_object($getInfoResult)) {
                    echo "<div class='view-div'>
                    	<h2>$name</h2>

                        <div class='view-grid'>
                            <div><img src='../afbeeldingen/$row->image'></div>
                            <div>$row->description</div>

                            <ul>
                                <li>Starttime : $row->start</li>
                                <li>Leader : $row->lead</li>
                                <li>Players : $row->players</li>
                            </ul>

                            <ul>
                                <li>Skills : $row->skills</li>
                                <li>min/max players : $row->min_players/$row->max_players</li>
                                <li>Duration : $row->play_minutes min</li>
                                <li>Explain : $row->explain_minutes min</li>
                            </ul>

                            $row->youtube
                        </div>

                        <p><a href='$row->url'>$row->url</a></p>
                        <a href='../index.php'>Return to homepage</a>
                    </div>";
                } else {
                    echo 'ERROR';
                }
            }

        ?>

    </div>

</body>
</html>