<?php

    $submit1 = $_POST['subButton1'];
    $submit2 = $_POST['subButton2'];

    if ($submit1) {
        $answ1 = $_POST['antwoord1'];
        $answ2 = $_POST['antwoord2'];  
        $answ3 = $_POST['antwoord3'];
        $answ4 = $_POST['antwoord4'];
        $answ5 = $_POST['antwoord5'];
        $answ6 = $_POST['antwoord6'];
        $answ7 = $_POST['antwoord7'];

        echo "<p>
            Er zijn veel mensen die niet kunnen <span>".$answ1.".</span> Neem nu bijvoorbeeld <span>".$answ2."</span>. Zelfs
            met de hulp van een <span>".$answ3."</span> of zelf <span>".$answ4."</span> kan <span>".$answ2."</span> niet <span>".$answ1."</span>. Dat
            heeft niet te maken met een gebrek aan <span>".$answ5."</span>. Maar met teveel <span>".$answ6."</span>. Teveel
            <span>".$answ6."</span> leidt tot <span>".$answ7."</span> en dat is niet goed als je wilt <span>".$answ1."</span>. Helaas voor
            <span>".$answ2."</span>.
        </p>";
    }

    if ($submit2) {
        $answ1 = $_POST['antwoord1'];
        $answ2 = $_POST['antwoord2'];  
        $answ3 = $_POST['antwoord3'];
        $answ4 = $_POST['antwoord4'];
        $answ5 = $_POST['antwoord5'];
        $answ6 = $_POST['antwoord6'];
        $answ7 = $_POST['antwoord7'];
        $answ8 = $_POST['antwoord8'];

        echo "<p>
             <span>".$answ1.".</span> Neem nu bijvoorbeeld <span>".$answ2."</span>. Zelfs
            met de hulp van een <span>".$answ3."</span> of zelf <span>".$answ4."</span> kan <span>".$answ2."</span> niet <span>".$answ1."</span>. Dat
            heeft niet te maken met een gebrek aan <span>".$answ5."</span>. Maar met teveel <span>".$answ6."</span>. Teveel
            <span>".$answ6."</span> leidt tot <span>".$answ7."</span> en dat is niet goed als je wilt <span>".$answ1."</span>. Helaas voor
            <span>".$answ2."</span>.
        </p>";
    }

?><span>