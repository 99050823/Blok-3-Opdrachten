<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="week1.css">
</head>
<body>

    <?php 
        date_default_timezone_set('Europe/Amsterdam');  
        $hours = date('H');  
        $minute = date('i');
        
        $scrMorning = 'morning.png';
        $scrAfternoon = 'afternoon.png';
        $scrEvening = 'evening.png';
        $scrNight = 'night.png';

        $style = 'style="color : white; position : absolute; top : 7.5cm; left : 13.4cm; font-size: 50px;"';

        echo '<h1 style="
        color : yellow;
        position : absolute;
        top : 6cm;
        left : 16cm;
        ">'.$hours.':'.$minute.'</h1>';


        if ($hours > 23) {
            echo $image = ' <img src="/Week1/git-Week1/images/'.$scrNight.'" /> ';
            $txtInsert = 'Goede Nacht';
            echo $text = '<h2 '.$style.'>'.$txtInsert.'</h2>';
        } elseif ($hours > 17) {
            echo $image = ' <img src="/Week1/git-Week1/images/'.$scrEvening.'" /> ';
            $txtInsert = 'Goede Avond';
            echo $text = '<h2 '.$style.'>'.$txtInsert.'</h2>';
        } elseif ($hours > 11) {
            echo $image = ' <img src="/Week1/git-Week1/images/'.$scrAfternoon.'" /> ';
            $txtInsert = 'Goede Middag';
            echo $text = '<h2 '.$style.'>'.$txtInsert.'</h2>';
        } elseif ($hours > 05) {
            echo $image = ' <img src="/Week1/git-Week1/images/'.$scrMorning.'" /> ';
            $txtInsert = 'Goede Morgen';
            echo $text = '<h2 '.$style.'>'.$txtInsert.'</h2>';
        }
    ?>

</body>
</html>