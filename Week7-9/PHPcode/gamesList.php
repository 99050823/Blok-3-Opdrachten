<?php

    while ($dataNames = mysqli_fetch_object($sqlQuery3)) {

        echo "<li>
            $dataNames->names 
        </li>";
    }

?>