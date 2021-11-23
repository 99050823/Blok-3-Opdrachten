<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week2 - form validation</title>
    <link rel="stylesheet" href="Week2.css">
</head>
<body>

    <div class="panel">
        <h2>WELKOM!</h2>
        <hr>
    </div>
    
    <?php
        
        $naam = $_POST["name"];
        $mail = $_POST["email"];

        $naamElement = "<h1 class='nameElement'>$naam</h1>";
        echo $naamElement;

        $mailElement = "<h1 class='mailElement'>$mail</h1>";
        echo $mailElement;

    ?>

</body>
</html>