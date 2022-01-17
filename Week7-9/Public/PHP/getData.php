<?php

    $title = $_GET['name'];
    $text = $_GET['text'];
    
    echo "<div>
        <h2>$title</h2>
        $text
        <a href='../index.php'>Return to the homepage</a>
    </div>";

?>