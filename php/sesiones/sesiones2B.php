<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Teo Coch</title>
</head>
<body>
    <ul>
    <?php
        session_id($_GET['id']);
        session_start();
        echo "<li class='bien'>".$_SESSION["nombre"]."</li>"."<li class='bien'>".$_SESSION["apellido"]."</li> "."<li class='bien'>".$_SESSION["edad"]."</li> "."<li class='bien'>".$_SESSION["peso"]."</li> "."<li class='bien'>".$_SESSION['sexo']."</li> "."<li class='bien'>".$_SESSION['ec']."</li> ";
        foreach ($_SESSION['aficiones'] as $value) {
            echo $value. " ";
        }

        

    ?>
    </ul>
</body>
</html>