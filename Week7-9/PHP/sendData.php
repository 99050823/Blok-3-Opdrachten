<?php

$submitBttn = $_POST['submit'];

if ($submitBttn) {

    $name = $_POST['game'];
    $start = $_POST['start'];
    $leader = $_POST['leader'];
    $count = $_POST['players']; 

    $sendQuery = "INSERT INTO planned (name, start, lead, players) VALUES ('".$name."', '".$start."', '".$leader."', '".$count."')";
    
    if ($conn->query($sendQuery) === TRUE) {
        echo "<script>console.log('records created')</script>";
    }
}

?>