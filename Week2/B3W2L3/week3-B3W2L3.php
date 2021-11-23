<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="week3-B3W2L3.php" method="post">
        <label id="empty1">empty*</label>
        <label id="empty2">empty*</label>

        <input id="naam" type="text" name="name" placeholder="naam">
        <input id="email" type="text" name="mail" placeholder="e-mail">

        <input type="submit">
    </form>
    
    <?php 
    
        $naam = $_POST["name"];
        $mail = $_POST["mail"];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if ($_POST["name"] == null) {

                echo '<style>
                #empty1 {display:block;}
                }</style>';

            } else {
                echo "<h2 class='name'>$naam</h2>";
            }

            if ($_POST["mail"] == null) {
                
                echo '<style>
                #empty2 {display:block;} 
                }</style>';
            } else {
                echo "<h2 class='mail'>$mail</h2>";
            }
        }

    ?>

</body>
</html>