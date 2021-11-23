<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="madLipz.css">
</head>
<body>

    <div class="container">

    <div class="nav">
            <p><a href="madLipz.php">Onkunde</a></p>
            <p><a href="madLipz2.php">Paniek</a></p>

            <h2>Paniek</h2>
        </div>
        
        <div class="tekstContainer">
            <p>Welk dier zou je nooit als huisdier willen hebben?</p>
            <p>Wie is het belangrijkste persoon in je leven?</p>
            <p>In welk land zou je graag willen wonen</p>
            <p>Wat doe je als je je verveelt</p>
            <p>Met welk speelgoed speelde je als kind het meest?</p>
            <p>Bij welke docent spijbel je het liefst</p>
            <p>Als je 100.000,- had, wat zou je dan kopen? </p>
            <p>Wat is je favorite bezigheid?</p>
        </div>

        <div class="inputContainer2">
            <form action="madLipz2.php" method="post">            
                <input type="text" name="antwoord1">
                <input type="text" name="antwoord2">
                <input type="text" name="antwoord3">
                <input type="text" name="antwoord4">
                <input type="text" name="antwoord5">
                <input type="text" name="antwoord6">
                <input type="text" name="antwoord7">
                <input type="text" name="antwoord8">

                <input type="submit" name="subButton2" value="Submit">
            </form>
        </div>

        <?php 

            $answer1 = $_POST["antwoord1"];
            $answer2 = $_POST["antwoord2"];
            $answer3 = $_POST["antwoord3"];
            $answer4 = $_POST["antwoord4"];
            $answer5 = $_POST["antwoord5"];
            $answer6 = $_POST["antwoord6"];
            $answer7 = $_POST["antwoord7"];
            $answer8 = $_POST["antwoord8"];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                echo "<style>
                    .tekst {
                        display: none;
                    }

                    .input2 {
                        display: none;
                    }
                </style>";
                    
                echo $tekst = "<div id='output'>Er heerst paniek in het koningkrijk <span>$answer3</span>.<br><br> Koning <span>$answer6</span> is ten
                einde raad en als koning <span>$answer6</span> ten einde raad is, roept hij zijn 
                ten-einde-raadsheer <span>$answer2</span>.<br><br>
                
                '<span>$answer2</span>! Het is een ramp! Het is een schande! '
                'Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?'
                'Mijn <span>$answer1</span> is verdwenen!<br><br> Zo maar, zonder waarschuwing. En ik had net <span>$answer5</span> voor hem gekocht!'
                'Majesteit, uw <span>$answer1</span> komt vast vanzelf weer terug?'
                'Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <span>$answer8</span> leren?'<br><br>
                'Maar Sire, daar kunt u toch uw <span>$answer7</span> voor gebruiken.'
                '<span>$answer2</span> je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.'
                '<span>$answer4</span>, Sire.'</div>";
                        
            }

        ?>  

    </div>

    <div class="footer"><footer>Gemaakt door : Luuk van Wijgerden</footer></div>

    <script src="madLipz.js"></script>
</body>
</html>