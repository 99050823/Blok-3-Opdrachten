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

        <header>
            <h2>Onkunde</h2>

            <nav>
                <ul>
                    <li><a href="madLipz.php">Onkunde</a></li>
                    <li><a href="madLipz2.php">Paniek</a></li>
                </ul>
            </nav>
        </header>

        <section>
            <form method="post"> 
                <label for="antwoord1">Wat zou je willen leren?</label>           
                <input type="text" name="antwoord1">

                <label for="antwoord2">Met wie kun je goed opschieten?</label>
                <input type="text" name="antwoord2">
                
                <label for="antwoord3">Wat is je favoriete getal?</label>
                <input type="text" name="antwoord3">
                
                <label for="antwoord4">Wat heb je bij je als je op vakantie gaat?</label>
                <input type="text" name="antwoord4">
                
                <label for="antwoord5">Wat is je beste eigenschap?</label>
                <input type="text" name="antwoord5">
                
                <label for="antwoord6">Wat is je slechtste eigenschap?</label>
                <input type="text" name="antwoord6">
                
                <label for="antwoord7">Wat is het ergste dat je kan overkomen?</label>
                <input type="text" name="antwoord7">

                <input type="submit" name="subButton1" value="Submit">
            </form>
        </section>

        <div class="output">
            <?php include 'Validation.php'?>
        </div>

        <footer>Gemaakt door : Luuk van Wijgerden</footer>
    </div>

</body>
</html>