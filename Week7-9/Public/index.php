<!DOCTYPE html>
<html lang="en">
<?php $conn = mysqli_connect('localhost', 'admin', '', 'testing_games'); ?>
<?php include 'PHP/sendData.php';?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <header>
            <h2>Planningstool</h2>
            <ul class="navlist">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?pagina=Games">Games</a></li>
                <li><a href="index.php?pagina=Planned">Planned Games</a></li>
            </ul>
        </header>

        <section>

            <?php 
            
                if (isset($_GET['pagina'])) {
                    require "Pages/".$_GET['pagina'].".php";
                } else {
                    echo "<form class='planForm' method='post'>
                        <label for='game'>Game : </label>
                    <select name='game'>";
                            
                    $sqlQuery2 = "SELECT * FROM games";
                    $result2 = mysqli_query($conn, $sqlQuery2);
        
                    while ($row = mysqli_fetch_array($result2)) {
                        echo "<option>".$row['name']."</option>";
                    }

                    echo "</select> 
                        <br>
                        <br>
                        <label for='time'>Time : </label>
                        <input class='time 'name='time' type='time'>
                        <br>
                        <br>
                        <label for='pers1'>Person 1 : </label>
                        <input name='pers1' type='text'>
        
                        <label for='pers2'>Person 2 : </label>
                        <input name='pers2' type='text'>
                        <br>
                        <br>
                        <input type='submit' value='Submit' name='submit'>
                    </form>";
                }

            ?>
            
        </section>

        <footer>Gemaakt door : Luuk van Wijgerden</footer>
    </div>

    <script src="script.js"></script>

</body>
</html>