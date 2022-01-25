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
                echo "ERROR: No connection";
            } else {

                $name = $_GET['varname'];
                $id = $_GET['varid'];
    
                $getInfoQuery = "SELECT games.*, planned.* FROM games
                LEFT JOIN planned ON games.id=planned.gameID
                WHERE games.gameName='".$name."'";  

                $getInfoResult = mysqli_query($conn, $getInfoQuery);
                mysqli_query($conn, $getInfoQuery) or die(mysqli_error($conn));
                if ($row = mysqli_fetch_object($getInfoResult)) {
                    echo $row->description;
                } else {
                    echo 'ERROR';
                }
            }

        ?>

    </div>

</body>
</html>