<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php require 'PHPcode/connect.php'?>
    <?php require 'PHPcode/getFormData.php'?>

    <div class="container">
        <div id="popUp">
            <h2>Plan a game</h2>
            <hr>

            <form action="index.php" method="post">
                <label for="game">Game : </label>
                <input name="game" type="text"><br><br>

                <label for="time">Time : </label>
                <input name="time" type="text"><br><br>

                <label for="person1">Pers1 : </label>
                <input name="person1" type="text">

                <label for="person2">Pers2 : </label>
                <input name="person2" type="text"><br><br>

                <input id="subBttn" type="submit" value="Submit">
            </form>
            <button class="exitBttn" onclick="exitButton()">exit</button>
        </div>

        <div class="gameList">
            <h3>Games List</h3>
            <ul>
                <?php require 'PHPcode/gamesList.php'?>
            </ul>
        </div>

        <div class="panelContainer">

            <header>
                <h2>TITLE</h2>
            </header>

            <?php include 'PHPcode/getData.php'?>

            <button id="planButton">Planning</button> <br><br>
            <footer>FOOTER</footer>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>