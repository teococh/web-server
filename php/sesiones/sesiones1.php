<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teo Coch</title>
</head>
<body>
    <article>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            Nombre: <input type="text" name="nombre"/><br>
            <select name="sal" id="a">
                <option value="saludo">Saludo</option>
                <option value="despedida">Despedida</option>
            </select><br>
            <input name="submit" type="submit" class="button">
        </form>
    </article>
    <article>
        <?php
            if (isset($_POST['submit'])) {
                $nombre = $_POST['nombre'];
                $seleccion = $_POST['sal'];
                echo "<h4>Valor actual:</h4>";
                if (preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $nombre)) {
                    if ($seleccion == "saludo") {
                        echo "Hola " . $nombre . "!<br>";
                    }if ($seleccion == "despedida") {
                        echo "Hasta la proxima " . $nombre . ".<br>";
                    }
                }else {
                    echo "Nombre no valido.<br>";
                }
            }
            $array[0] = $nombre;
            $array[1] = $seleccion;
            session_start();
            echo "<h4>Valor de la sesión:</h4>";
            if (preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $_SESSION['sesion1'][0])) {
                if ($_SESSION['sesion1'][1] == "saludo") {
                    echo "Hola " . $_SESSION['sesion1'][0] . "!<br>";
                }if ($_SESSION['sesion1'][1] == "despedida") {
                    echo "Hasta la proxima " . $_SESSION['sesion1'][0] . ".<br>";
                }
            }else {
                echo "Nombre no valido.<br>";
            }
            $_SESSION['sesion1'] = $array;
        ?>
    </article>
    <a href="./sesiones.html">Inicio sesiones</a>
</body>
</html>