<?php

    $formVar1 = $_POST['game'];
    $formVar2 = $_POST['time'];
    $formVar3 = $_POST['person1'];
    $formVar4 = $_POST['person2'];

    $search = mysqli_real_escape_string($conn, $_POST['game']);

    $sqlQuery1 = "INSERT INTO gamesdata(game, time, person1, person2) VALUES ('$formVar1','$formVar2','$formVar3','$formVar4')";
    $sqlQuery4 = "SELECT * FROM game_names_pic WHERE names='$search'";

    if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {

        $result2 = mysqli_query($conn, $sqlQuery4);
        $searchResult = mysqli_num_rows($result2);

        if ($searchResult > 0) {
            echo "<script>
                alert('SEARCH COMPLETE');
            </script>";

            $result1 = mysqli_query($conn, $sqlQuery1); 

        } else {
            echo "<script>
                alert('NO MATCH');
            </script>";
        }
    }

?>