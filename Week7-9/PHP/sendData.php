<?php

$submitBttn = $_POST['submit'];

if ($submitBttn) {

    
    $countQuery = "SELECT * FROM planned";
    $countResult = mysqli_query($conn, $countQuery);

    $amount = mysqli_num_rows($countResult);
    $amount++;

    $name = $_POST['game'];
    $start = $_POST['start'];
    $leader = $_POST['leader'];
    $count = $_POST['players']; 

    $sendQuery = "INSERT INTO planned (gameID, name, start, lead, players) VALUES ('".$amount."','".$name."', '".$start."', '".$leader."', '".$count."')";
    
    if ($conn->query($sendQuery) === TRUE) {
        echo "<script>console.log('records created')</script>";
    }
}

?>