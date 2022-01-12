<?php

    if (isset($_POST['submit'])) {
        
        $name = $_POST['game'];
        $time = $_POST['time'];
        $pers1 = $_POST['pers1'];
        $pers2 = $_POST['pers2'];
    
        $sqlQuery1 = "INSERT INTO planned (Name, Time, Pers1, Pers2) VALUES ('$name', '$time', '$pers1', '$pers2')";
    
        if (mysqli_query($conn, $sqlQuery1)) {
            echo "<script>
                console.log('SUCCES');
            </script>";
        } else {
            echo "<script>
                console.log('ERROR');
            </script>";
        }

    }

?>