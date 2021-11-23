<?php

    while ($data = mysqli_fetch_object($sqlQuery2)) {

        // $sqlQuery5 = "SELECT * FROM game_names_pic WHERE names='$data->game'";

        echo "<div name='content' class='contentContainer'>
            <p>$data->game</p>
            <p>$data->time</p>
            <p>$data->person1</p>
            <p>$data->person2</p>
        </div>";

        echo "<div id='gamePopUp'>
            $data->game
        </div>";

        echo "<br>";
    }

?>