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
            Er zijn veel mensen die niet kunnen <span>".$answ1."</span> Neem nu bijvoorbeeld <span>".$answ2."</span>. Zelfs
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
            Er heerst paniek in het koningkrijk <span>".$answ3.".</span> Koning <span>".$answ2."</span> is ten einde 
            raad en als koning <span>".$answ2."</span> ten einde raad is roept hij zijn ten einde
            raadsheer <span>".$answ6."</span>. 
            <br>
            <br>            
            '<span>".$answ6."</span> het is een ramp! Het is een schande!'
            <br>
            'Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?'
            <br>
            'Mijn <span>".$answ1."</span> is verdwenen! Zo maar, zonder waarschuwing. En ik had
            net <span>".$answ5."</span> voor hem gekocht!'
            <br>
            'Majesteit, uw <span>".$answ1."</span> komt vanzelf weer terug.'
            <br>
            'Ja da's leuk en aardig, maar hoe moet ik ondertussen <span>".$answ8."</span> leren?'
            <br>
            'Maar sire, daar kun u toch uw <span>".$answ7."</span> voor gebruiken?'
            <br>
            '<span>".$answ2."</span> je hebt helemaal gelijk!'
            <br>
            '<span>".$answ4."</span>, Sire.'
        </p>";
    }

?><span>