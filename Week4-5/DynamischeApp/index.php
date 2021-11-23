<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="DynamischeApp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <?php 

        $conn = mysqli_connect('localhost', 'admin', 'admin', 'characters');
        $sqlQuery1 = 'SELECT id, name, health, attack, defense, avatar FROM characters';
        $result1 = mysqli_query($conn, $sqlQuery1);
    
        $idCount = 0;

        $count = mysqli_num_rows($result1);
        
        if(isset($_GET['pagina'])) {
            require "Pages/".$_GET['pagina'].".php";
        } else {


            if (!$conn) {
                echo "Connection failed: " . $conn->connect_error;
            } else {
            
                echo "<header><h1>Alle $count characters uit de database</h1></header>";

                while ($row = mysqli_fetch_object($result1)) {

                    $idCount++;

                    echo "<div id='container'>
                        <div class='left'>
                            <img class='avatar' src='vormgeving/vormgeving/resources/images/$row->avatar'>
                        </div>
                        <div class='right'>
                            <h2>
                                $row->name
                            </h2>
                            <div class='stats'>
                                <ul class='fa-ul'>
                                    <li><span class='fa-li'><i class='fas fa-heart'></i></span>$row->health</li>
                                    <li><span class='fa-li'><i class='fas fa-fist-raised'></i></span>$row->attack</li>
                                    <li><span class='fa-li'><i class='fas fa-shield-alt'></i></span>$row->defense</li>
                                </ul>
                            </div>
                        </div>
                        <div class='detailButton'><i class='fas fa-search'></i><a href='index.php?pagina=characters&characters_id=$idCount'>bekijk</a></div>
                    </div> <br>";
                }

                
            } 

        }

        echo "<footer>&copy; Luuk van Wijgerden 2020</footer>";
    ?>

</body>
</html>