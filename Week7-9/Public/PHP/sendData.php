<?php 

    $submitBttn = $_POST['submit'];

    if ($submitBttn) {
        $name = $_POST['game'];
        $start = $_POST['time'];
        $lead = $_POST['leader'];
        $play = $_POST['player'];

        $sendQuery = "INSERT INTO planned (Name, Start, Leader, Players) VALUES ('".$name."', '".$start."', '".$lead."', '".$play."')";
        
        if ($conn->query($sendQuery) === TRUE) {
            echo "<script>console.log('records created')</script>";
        }
    }

?>