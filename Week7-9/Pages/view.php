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
                $id = $_GET['varid'];
    
                $getInfoQuery = "SELECT games.*, planned.*
                FROM planned RIGHT JOIN games ON games.id = '".$id."';
                ";  

                $getInfoResult = mysqli_query($conn, $getInfoQuery);
                mysqli_query($conn, $getInfoQuery) or die(mysqli_error($conn));
                if ($row = mysqli_fetch_object($getInfoResult)) {
                    echo "<div class='view-div'>
                    	<h2>$row->name</h2>

                        <div class='view-grid'>
                            <div><img src='../afbeeldingen/$row->image'></div>
                            <div>$row->description</div>
                            <div class='planned-details'>
                                <p> Starttime : $row->start</p>
                                <p> Leader : $row->lead</p>
                                <p> Players : $row->players</p>
                            </div>
                            <div>
                                <p>Skills : $row->skills </p>
                                <p>min/max players : $row->min_players/$row->max_players</p>
                            </div>
                        </div>

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