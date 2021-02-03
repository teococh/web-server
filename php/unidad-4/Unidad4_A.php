<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Teo Coch Catalan</title>
</head>
<body>

<main>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <article>
            <h4>Eercicio 1:</h4>
            1 er numero:
            <input type="number" name="num1"/><br>
            2º numero:
            <input type="number" name="num2"/><br>
            <select name="operacion">
                <option value="0">todas</option>
                <option value="1">+</option>
                <option value="2">-</option>
                <option value="3">*</option>
                <option value="4">/</option>
            </select><br>
            <?php
            if (!empty($_POST['num1']) || !empty($_POST['num2'])) {
                if(isset($_POST['submit']))
            
            {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operacion = $_POST['operacion'];
                echo $num1 . " + " . $num2 . " = " . $num1 + $num2 . "<br>";
                echo $num1 . " / " . $num2 . " = " . $num1 / $num2 . "<br>";
                switch ($operacion) {
                    case '0':
                        echo $num1 . " + " . $num2 . " = " . $num1 + $num2 . "<br>";
                        echo $num1 . " - " . $num2 . " = " . $num1 - $num2 . "<br>";
                        echo $num1 . " * " . $num2 . " = " . $num1 * $num2 . "<br>";
                        echo $num1 . " / " . $num2 . " = " . $num1 / $num2 . "<br>";
                        break;
                    case '1':
                        echo $num1 . " + " . $num2 . " = " . $num1 + $num2 . "<br>";
                        break;
                    case '2':
                        echo $num1 . " - " . $num2 . " = " . $num1 - $num2 . "<br>";
                        break;
                    case '3':
                        echo $num1 . " * " . $num2 . " = " . $num1 * $num2 . "<br>";
                        break;
                    case '4':
                        echo $num1 . " / " . $num2 . " = " . $num1 / $num2 . "<br>";
                        break;
                    default:
                        # code...
                        break;
                }
            }
            }
            ?>
        </article>
        <article>
            <h4>Ejercicio 2:</h4>
            <input type="number" name="dia"><br>
            <?php
            if(isset($_POST['submit']))
            
            {
                $dia = $_POST['dia'];
                
                if ($dia < 15) {
                    echo "Primera quincena<br>";
                }
                else{
                    echo "Segunda quincena<br>";
                }
            }
            ?>
        </article>
        <article>
            <h4>Ejercicio 3:</h4>
            
                <input type="checkbox" name="palabra" value="Casa">Casa</input>
                <input type="checkbox" name="palabra" value="Boli">Boli</input>
                <input type="checkbox" name="palabra" value="Teclado">Teclado</input>
                <input type="checkbox" name="palabra" value="Fisica">Fisica</input>
                <input type="checkbox" name="palabra" value="Hoja">Hoja</input>
                <input type="checkbox" name="palabra" value="Mañana">Mañana</input>
                <input type="checkbox" name="palabra" value="Nosotros">Nosotros</input>
                <input type="checkbox" name="palabra" value="Reloj">Reloj</input>
                <input type="checkbox" name="palabra" value="Llave">Llave</input>
                <input type="checkbox" name="palabra" value="Camino">Camino</input>
            
            <?php
                $palabras = $_REQUEST['palabra'];
                foreach ((array) $palabras as $palabra) {
                        echo "$palabra<br>";
                }
            ?>
        </article>
        <article>
            <h4>Ejercicio 5:</h4>
            <select name="calculadora">
                <option value="peseta">Peseta-Euro</option>
                <option value="euro">Euro-Peseta</option>
            </select><br>
            Cantidad: <input type="float" name="cantidad"><br>
            <?php
                $opcion = $_POST['calculadora'];
                $cantidad = $_POST['cantidad'];
                if (!empty($cantidad)) {
                    if ($opcion == "euro") {
                        echo $cantidad*166.386;
                    }else {
                        echo $cantidad/166.386;
                    }
                }
                
            ?>
        </article>
        <article>
            <h4>Ejercicio 6:</h4>

        </article>

        <input type="submit" name="submit" value="Submit Form"><br>
    </form>
</main>
</body>
</html>