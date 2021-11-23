<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        $getal1 = rand(1,10);
        $getal2 = rand(1,10);

        $plus = $getal1 + $getal2;
        $min = $getal1 - $getal2;   
        $keer = $getal1 * $getal2;
        $delen = $getal1 / $getal2;

        echo $getal1 . ' + ' . $getal2 . ' = ' . $plus . '<br>';
        echo $getal1 . ' - ' . $getal2 . ' = ' . $min . '<br>';
        echo $getal1 . ' x ' . $getal2 . ' = ' . $keer . '<br>';
        echo $getal1 . ' : ' . $getal2 . ' = ' . $delen . '<br>'. '<br>';

        function tafel ($tafel) {  

            for ($i=0; $i < 11; $i++) { 
                $uitkomst = $tafel * $i;
                echo $tafel . ' x ' . $i . ' = ' . $uitkomst . '<br>';
            }
        }

        tafel(6);

        echo '<br>';

        function arrayLoop () {
            $array1 = array (3, 5, 8, 12);
            
            foreach($array1 as $numbers) {

                for ($i=0; $i < 11; $i++) { 
                    $uitkomst1 = $numbers * $i;
                    echo $numbers . ' x ' . $i . ' = ' . $uitkomst1 . '<br>';
                    
                }
                echo '<br>';
            }
        }

        arrayLoop();
    ?>

</body>
</html>