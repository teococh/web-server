<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Teo Coch</title>
</head>
<body>
    <?php
        session_id($_GET['id']);
        session_start();
        echo $_SESSION["nombre"];

        for ($i=0; $i < 4; $i++) { 
            echo "<h4 class='mal'>".$_SESSION["mal"][$i]."</h4>";
        }

    ?>
</body>
</html>