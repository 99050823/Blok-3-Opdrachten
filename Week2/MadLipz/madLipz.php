<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onkunde & Paniek</title>
    <link rel="stylesheet" href="madLipz.css">
</head>
<body>
    
    <div class="container">

        <div class="nav">
            <p><a href="madLipz.php">Onkunde</a></p>
            <p><a href="madLipz2.php">Paniek</a></p>

            <h2>Onkunde</h2>
        </div>
        
        <div class="tekstContainer">
            <p>Wat zou je willen leren?</p>
            <p>Met wie kun je goed opschieten?</p>
            <p>Wat is je favoriete getal?</p>
            <p>Wat heb je bij je als je op vakantie gaat?</p>
            <p>Wat is je beste eigenschap?</p>
            <p>Wat is je slechtste eigenschap?</p>
            <p>Wat is het ergste dat je kan overkomen?</p>
        </div>

        <div class="inputContainer">
            <form action="madLipz.php" method="post">            
                <input type="text" name="antwoord1">
                <input type="text" name="antwoord2">
                <input type="text" name="antwoord3">
                <input type="text" name="antwoord4">
                <input type="text" name="antwoord5">
                <input type="text" name="antwoord6">
                <input type="text" name="antwoord7">

                <input type="submit" name="subButton1" value="Submit">
            </form>
        </div>

        <?php

            $answer1 = $_POST['antwoord1'];
            $answer2 = $_POST['antwoord2'];
            $answer3 = $_POST['antwoord3'];
            $answer4 = $_POST['antwoord4'];
            $answer5 = $_POST['antwoord5'];
            $answer6 = $_POST['antwoord6'];
            $answer7 = $_POST['antwoord7'];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                echo $tekst = "<div id='output'>Er zijn veel mensen die niet kunnen <span>$answer1</span>.<br><br> Neem nou <span>$answer2</span>. Zelfs met de hulp van een <span>$answer4</span> of zelfs <span>$answer3</span> kan <span>$answer2</span> niet <span>$answer1</span>.
                <br><br> Dat heeft niet te maken met een gebrek aan <span>$answer5</span>, maar met een te veel aan <span>$answer6</span>.<br><br>
                Te veel <span>$answer6</span> kan leiden tot <span>$answer7</span> en dat is niet goed als je wilt <span>$answer1</span>. Helaas voor <span>$answer2</span>.</div>";
            }

        ?>


    </div>

    <div class="footer"><footer>Gemaakt door : Luuk van Wijgerden</footer></div>

    <script src="madLipz.js"></script>

</body>
</html>