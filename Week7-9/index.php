<!-- <!DOCTYPE html> -->
<html lang="en">
<?php require 'PHP/connect.php';?>
<?php require 'PHP/sendData.php';?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h2>Planningstool</h2>
            <ul class="navList">
                <li>Games</li>
                <li>Planned games</li>
                <li>Add game</li>
            </ul>
        </header>

        <section>
            <button>Plan a game</button>

            <form method="post">
                <label for="game">Game : </label>
                <input name="game" type="text">
                <br>
                <br>
                <label for="time">Time : </label>
                <input class="time "name="time" type="time">
                <br>
                <br>
                <label for="pers1">Person 1 : </label>
                <input name="pers1" type="text">

                <label for="pers2">Person 2 : </label>
                <input name="pers2" type="text">
                <br>
                <br>
                <input type="submit" value="Submit" name="submit">
            </form>

            <div class="gamesList"> 
                <ul>
                    <li>7 Wonders</li>
                    <li>10min Kraak</li>
                    <li>Camel Up</li>
                    <li>City of Horror</li>
                    <li>Climbers</li>
                    <li>Codename Pictures</li>
                    <li>Concept</li>
                    <li>Counterfeiters</li>
                    <li>Dale of Merchants</li>
                    <li>Dixit</li>
                    <li>Downforce</li>
                    <li>Dragon Flagon</li>
                    <li>Fantasy Realms</li>
                    <li>Ghost Fighting Treasure Hunters</li>
                    <li>Gizmos</li>
                    <li>John</li>
                    <li>Keep Talking and Nobody Explodes</li>
                    <li>Lemming Maffias</li>
                    <li>Micropolis</li>
                    <li>Mysterium</li>
                    <li>Notalone</li>
                    <li>Pandemic</li>
                    <li>Roborally</li>
                    <li>Spyfall</li>
                    <li>The Estates</li>
                </ul>
            </div>

            <div class="planned">
                <h2>Planned Games</h2>

                <?php
                
                    echo "Work in Progress";

                    // $sqlQuery2 = "SELECT * FROM planned";

                    // if($result = mysqli_query($mysqli1, $sqlQuery2)) {
                    //     if (mysqli_num_rows($result) > 0) {
                    //         while($row = mysqli_fetch_array($result)) {

                    //             echo "<div>
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
            </div>
        </section>

        <footer>Gemaakt door : Luuk van Wijgerden</footer>
    </div>

    <script src="script.js"></script>
</body>
</html>
