<?php 

    $sqlQuery2 = "SELECT * FROM characters WHERE id='".$_GET['characters_id']."'";
    $result2 = mysqli_query($conn, $sqlQuery2);

    if ($row = mysqli_fetch_object($result2)) {

        echo "<header><h1>$row->name</h1>
                <a class='backbutton' href='index.php'><i class='fas fa-long-arrow-alt-left'></i> Terug</a></header>
            <div id='container'>
                <div class='detail'>
                    <div class='left'>
                        <img class='avatar' src='vormgeving/vormgeving/resources/images/$row->avatar'>
                        <div class='stats' style='background-color: $row->color'>
                            <ul class='fa-ul'>
                                <li><span class='fa-li'><i class='fas fa-heart'></i></span>$row->health</li>
                                <li><span class='fa-li'><i class='fas fa-fist-raised'></i></span>$row->attack</li>
                                <li><span class='fa-li'><i class='fas fa-shield-alt'></i></span>$row->defense</li>
                            </ul>
                            <ul class='gear'>
                                <li><b>Weapon</b>: $row->weapon</li>
                                <li><b>Armor</b>: $row->armor</li>
                            </ul>
                        </div>
                    </div>
                    <div class='right'>
                        <p>
                            $row->bio
                        </p>
                    </div>
                    <div style='clear: both'></div>
                </div>
            </div>";
    }

?>
