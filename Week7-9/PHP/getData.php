<?php

    $sqlQuery2 = "SELECT * FROM planned";
    $result2 = mysqli_query($conn, $sqlQuery2);

    if (isset($_GET['pagina'])) {
        require "index.php";
    } else {

        if (!$conn) {
            echo "Connection failed: " . $conn->connect_error;
        } else {
        
            while($row = mysqli_fetch_array($result2)) {

                $name = $row['Name'];

                echo "<div class='plannedGame'>
                    <h3>".$row['Name']."</h3>
                    <p>".$row['Time']."</p>
                    <p>".$row['Pers1']."</p>
                    <p>".$row['Pers2']."</p>
                </div>";

                // echo "<div class='viewGame'><a href='index.php?pagina=viewGame&testVal=TEST'>View</a></div>";

                echo "<br>";
            }
        } 
    }

    // if($result = mysqli_query($mysqli1, $sqlQuery2)) {
    //     if (mysqli_num_rows($result) > 0) {
    //         while($row = mysqli_fetch_array($result)) {

    //             echo "<div class='plannedGame'>
    //                 <h3>".$row['Name']."</h3>
    //                 <p>".$row['Time']."</p>
    //                 <p>".$row['Pers1']."</p>
    //                 <p>".$row['Pers2']."</p>
    //             </div>";

    //             echo "<br>";
    //         }

    //     } else { 
    //         echo "<script>
    //             console.log('No records found');
    //         </script>";
    //     }
    // } else {
    //     echo "<script>
    //         console.log('ERROR: Could not execute querry');
    //     </script>";
    // }
?>