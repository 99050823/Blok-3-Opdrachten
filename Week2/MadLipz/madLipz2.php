<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="madLipz.css">
    <title>Paniek</title>
</head>
<body>

    <div class="container">

        <header>
            <h2>Paniek</h2>

            <nav>
                <ul>
                    <li><a href="madLipz.php">Onkunde</a></li>
                    <li><a href="madLipz2.php">Paniek</a></li>
                </ul>
            </nav>
        </header>

        <section>
            <form method="post"> 
                <label for="antwoord1">Welk dier zou je als huisdier willen?</label>           
                <input type="text" name="antwoord1">

                <label for="antwoord2">Wie is het belangrijkste persoon in je leven?</label>
                <input type="text" name="antwoord2">
                
                <label for="antwoord3">In welk land zou je willen wonen?</label>
                <input type="text" name="antwoord3">
                
                <label for="antwoord4">Wat doe je als je je verveelt?</label>
                <input type="text" name="antwoord4">
                
                <label for="antwoord5">Met welk speelgoed speelde je als kind het meeste?</label>
                <input type="text" name="antwoord5">
                
                <label for="antwoord6">Bij welke docent spijbelde je het lieftst?</label>
                <input type="text" name="antwoord6">
                
                <label for="antwoord7">Als je 100.000 euro had wat zou je dan kopen?</label>
                <input type="text" name="antwoord7">

                <label for="antwoord8">Wat is je favorite bezigheid?</label>
                <input type="text" name="antwoord8">

                <input type="submit" name="subButton2" value="Submit">
            </form>
        </section>

        <div class="output">
            <?php include 'Validation.php'?>
        </div>

        <footer>Gemaakt door : Luuk van Wijgerden</footer>
    </div>

</body>
</html>