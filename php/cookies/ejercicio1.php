<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teo</title>
</head>
<body>
    
    <h3>Ejercicio 1:</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Nombre: <input name="nombre" type="text"><br>
        Idioma: <input name="idioma" type="text"><br>
        color: <input name="color" type="text"><br>
        ciudad: <input name="ciudad" type="text"><br>
        <input type="submit" name="form1" class="boton">
    </form>
    <?php
        echo $_COOKIE['galleta1'];
    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        
    </form>
</body>
</html>
<?php
phpinfo();
        if (isset($_POST['form1'])) {
            $nombre = $_POST['nombre'];
            $idioma = $_POST['idioma'];
            $color = $_POST['color'];
            $ciudad = $_POST['ciudad'];
            setcookie("galleta1", "$nombre/$idioma/$color/$ciudad", 10000000000);
        }
    ?>