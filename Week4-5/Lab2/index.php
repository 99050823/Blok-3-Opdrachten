<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn page</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
</head>
<body>

    <div>

        <?php include 'Includes/header.php'?>

        <ul>
            <li><a href="index.php?pagina=page1">page1</a></li>
            <li><a href="index.php?pagina=page2">page2</a></li>
            <li><a href="index.php?pagina=page3">page3</a></li>
            <li><a href="index.php?pagina=page4">page4</a></li>
        </ul>

        <?php 

            if (isset($_GET['pagina'])) {
                require "Pages/".$_GET['pagina'].".php";   	   
            }

        ?>

        <?php include 'Includes/footer.php'?>
        
    </div>

</body>
</html>