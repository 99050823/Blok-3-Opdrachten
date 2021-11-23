<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div>

        <?php include 'Includes/header.php'?>

        <?php
        
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "databank_php";

            $conn = new mysqli($servername, $username, $password, $dbname);

        ?>

        <?php include 'Includes/footer.php'?>

    </div>

</body>
</html>