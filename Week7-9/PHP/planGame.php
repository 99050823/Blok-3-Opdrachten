<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $game = $_POST['game'];
        $time = $_POST['time'];
        $pers1 = $_POST['pers1'];
        $pers2 = $_POST['pers2'];

        $sqlQuery3 = "INSERT INTO planned (Name, Time, Pers1, Pers2) VALUES ('".$game."','".$time."','".$pers1."','".$pers2."')";

        if ($conn->query($sqlQuery3) === TRUE) {
            echo "Record created";
        } else {
            echo "ERROR";
        }
    }

?>