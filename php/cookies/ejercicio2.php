<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teo Coch</title>
</head>
<body>
<h3>Ejercicio 2:</h3>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Numero: <input type="number" name="number1"> <br>
        Numero: <input type="number" name="number2"> <br>
        Elija: <br>
        <select name="operacion[]" multiple>
            <option value="+">suma</option>
            <option value="-">resta</option>
            <option value="*">multiplicacion</option>
            <option value="/">division</option>
        </select> <br>
        <input name="form2" type="submit" class="button">
        <?php
            $array = $_COOKIE['galleta'];
            
            if (isset($_POST['form2'])) {
                $num1 = $_POST['number1'];
                $num2 = $_POST['number2'];
                $operacion = $_POST['operacion'];
                $compresCookie = json_encode($operacion);
                setcookie("galleta", $compresCookie, 10000000000);
            }
            echo "<h4> Operaciones actuales:</h4>";

            for ($i=0; $i < count($operacion); $i++) { 
                echo $num1.$operacion[$i].$num2."<br>";
            }
            
            echo "<h4>Las operaciones realizadas ateriormente han sido: </h4>".$_COOKIE['galleta'];
        ?>
    </form>
</body>
</html>