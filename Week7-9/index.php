<!DOCTYPE html>
<html lang="en">
<?php require 'PHP/connect.php'?>
<?php include 'PHP/sendData.php'?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
        <header>
            <h2>Planningstool</h2>
            <ul class="navlist">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?pagina=list">Games</a></li>
                <li><a href="index.php?pagina=planned">Planned Games</a></li>
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
                            
                    $sqlQuery1 = "SELECT * FROM games";
                    $result1 = mysqli_query($conn, $sqlQuery1);
        
                    while ($row = mysqli_fetch_array($result1)) {
                        echo "<option>".$row['gameName']."</option>";
                    }

                    echo "</select> 
                        <br>
                        <br>
                        <label for='start'>Time : </label>
                        <input class='time 'name='start' type='time'>
                        <br>
                        <br>

                        <label for='leader'>Leader : </label>
                        <input name='leader' type='text'>

                        <label for='player'>Players :  </label>
                        <input name='players' type='number'>
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