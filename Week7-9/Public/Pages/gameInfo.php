<?php

    $newConn = mysqli_connect('localhost', 'admin', '', 'testing_games');

    if(!$newConn) {
        echo "Not Connected";
    } else {

        $searchQuery = "SELECT * FROM games WHERE name='".$_GET['name']."'";
        $searchResult = mysqli_query($newConn, $searchQuery);
    
        if ($row = mysqli_fetch_object($searchResult)) {
            echo "<div class='gameView'>
                <div><h2>$row->name</h2></div>
                <div>$row->description</div>
                <div><img src='../afbeeldingen/$row->image'></div>
                <a href='../index.php'>Return to the homepage</a>
            </div>";
        }   
    }

    echo "<style>
        body {
            display: flex;
            justify-content: center;
            font-family: 'Josefin Sans', sans-serif;
        }

        .gameView {
            background-color: darkcyan;
            width: 800px;
            display: grid;
            grid-template-columns: 400px 400px;
            text-align: center;
        }

        img {
            width: 250px;
            height: 250px;
            margin-bottom: 60px;
            margin-top: -20px;
        }

        p {
            position: relative;
            top: 2cm;
        }

        a {
            position: relative;
            top: 4cm;
        }
    </style>";
?>