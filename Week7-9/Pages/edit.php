<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <?php

        require '../PHP/connect.php';

        if (!$conn) {
            echo 'Connection failed: ' . $conn->connect_error;
        } else {

            $recordQuery = "SELECT * FROM planned WHERE gameID='".$_GET['varname']."'";
            $recordResult = mysqli_query($conn, $recordQuery);

            if ($row = mysqli_fetch_object($recordResult)) {
                echo "<div class='main-div'>

                    <div class='list-div'>
                        <ul>
                            <li>Current Name : </li>
                            <li>Current Start Time : </li>
                            <li>Current Leader : </li>
                            <li>Current players : </li>
                        </ul>

                        <ul>
                            <li>".$row->name."</li>
                            <li>".$row->start."</li>
                            <li>".$row->lead."</li>
                            <li>".$row->players."</li>
                        </ul>
                    </div>";

                echo "<form method='post'>
                <select name='name'>";

                $sqlQuery1 = "SELECT * FROM games";
                $result1 = mysqli_query($conn, $sqlQuery1);
    
                while ($row = mysqli_fetch_array($result1)) {
                    echo "<option>".$row['gameName']."</option>";
                }

                echo "</select>
                    <input type='time' name='start'>
                    <input type='text' name='lead' placeholder='Leader'>
                    <input type='number' name='players' placeholder='Players'>

                    <input type='submit' name='editSubmit'>
                </form>";   

                echo "<a href='../index.php'>Return to Homepage</a>";

                echo "</div>"; 
            }

            $submitBttn = $_POST['editSubmit'];

            if ($submitBttn) {
                
                $name = $_POST['name'];
                $start = $_POST['start'];
                $lead = $_POST['lead'];
                $players = $_POST['players'];
    
                $editQuery = "UPDATE planned SET name='$name', start='$start', lead='$lead', players='$players' WHERE gameID='".$_GET['varname']."'";

                if ($conn->query($editQuery) === TRUE) {
                    echo "<script>console.log('Record changed');</script>";
                } else {
                    echo "ERROR";
                }   
            }

        }
    ?>

    <script src="../script.js"></script>
    
</body>
</html>