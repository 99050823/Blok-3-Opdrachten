<!-- <!DOCTYPE html> -->
<html lang="en">
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

            <form>
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
                <button>Submit</button>
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
            </div>
        </section>

        <footer>Gemaakt door : Luuk van Wijgerden</footer>
    </div>

    <script src="script.js"></script>
</body>
</html>
