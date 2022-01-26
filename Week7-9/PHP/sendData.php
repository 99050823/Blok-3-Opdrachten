<?php

$submitBttn = $_POST['submit'];

if ($submitBttn) {

    $name = $_POST['game'];
    $start = $_POST['start'];
    $leader = $_POST['leader'];
    $count = $_POST['players']; 

    $sendQuery = "INSERT INTO planned (name, start, lead, players) VALUES ('".$name."', '".$start."', '".$leader."', '".$count."')";
    $sendResult = mysqli_query($conn, $sendQuery);

    if (!$sendResult) {
        echo "<script>console.log('ERROR : records not created')</script>";
    } else {
        echo "<script>console.log('records created : $name')</script>";
    }
}

?>