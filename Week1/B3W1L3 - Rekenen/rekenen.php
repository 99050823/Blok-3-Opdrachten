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
    
        $getal1 = rand(10,100);
        $getal2 = rand(10,100);

        echo "<script>
            var input1 = $getal1;
            var input2 = $getal2;

            var antwoord = input1 + input2;

            document.write(antwoord);
        </script>"
    ?>

</body>
</html>