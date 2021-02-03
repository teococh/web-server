<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teo Coch</title>
</head>
<body>
    <article>
        <h4>Ejercicio 2: </h4>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            Nombre: <input type="text" name="nombre"/><br>
            <select name="sal" id="a">
                <option value="saludo">Saludo</option>
                <option value="despedida">Despedida</option>
            </select><br>
            <input name="submit" type="submit" class="button">
        </form>
        
        <?php
            if (isset($_POST['submit'])) {
                $nombre = $_POST['nombre'];
                $seleccion = $_POST['sal'];
                if (preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $nombre)) {
                    if ($seleccion == "saludo") {
                        echo "Hola " . $nombre . "!<br>";
                    }if ($seleccion == "despedida") {
                        echo "Hasta la proxima " . $nombre . ".<br>";
                    }
                }else {
                    echo "Nombre no valido.<br>";
                }
                $array[0] = $nombre;
                $array[1] = $seleccion;
                $compresCookie = json_encode($array);
                echo $_COOKIE['galleta'];
                setcookie("galleta", $compresCookie, 10000000000);  
            }
        ?>
    </article>
</body>
</html>