<!-- <!DOCTYPE html> -->
<html lang="en">
<?php $conn = mysqli_connect('localhost', 'admin', '', 'testing_games'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
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

            <form class="planForm" method="post">
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

                    $sqlQuery1 = "SELECT * FROM planned";
                    $result1 = mysqli_query($conn, $sqlQuery1);

                    if(isset($_GET['pagina'])) {
                        require "PHP/".$_GET['pagina'].".php";
                    } else {

                        if (!$conn) {
                            echo "Connection failed: " . $conn->connect_error;
                        } else {
                            while($row = mysqli_fetch_array($result1)) {

                                $name = $row['Name'];

                                echo "<div class='plannedGame'>
                                    <h3>".$row['Name']."</h3>
                                    <p>".$row['Time']."</p>
                                    <p>".$row['Pers1']."</p>
                                    <p>".$row['Pers2']."</p>

                                    <div class='viewLink'>test</div>
                                </div>";

                                echo "<br>";
                            }
                        }
                    }
                ?>
            </div>
        </section>

        <footer>Gemaakt door : Luuk van Wijgerden</footer>
    </div>

    <script src="script.js"></script>
</body>
</html>
