<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas</title>
    <style>
    article {
    width: 80%;
    margin: 20px auto 0px auto;
    border: 1px gray solid;
    box-shadow: 5px 5px gray;
    background-color: rgba(250, 250, 250, 0.7);
    padding: 2rem;
    }
    body {
        background-color: aqua;
    }
    input {
        margin: 0.5rem 1rem 0.5rem 1rem;
    }
    .boton {
        margin-left: 0;
    }
    </style>
</head>
<body>
    <?php
        $nombre;
        $edad;
        $sexo;
        $aficiones;
        if (isset($_POST['submit'])) {
            $nombre = $_REQUEST['nombre'];
            $edad = $_REQUEST['edad'];
            echo "Hola, " .$nombre ." usted tiene: " .$edad ." años.";
        }
    ?>
    <article id="ejercicio">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            Nombre: <input type="text" name="nombre"><br>
            Edad:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="edad"><br>
            Sexo:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sexo" id="h"><input type="radio" name="sexo" id="m"><br>
            <input type="submit" name="submit" value="Form submit" class="boton">
        </form>
    </article>
</body>
</html>