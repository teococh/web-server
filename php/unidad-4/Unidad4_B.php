<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teo Coch Catalan</title>
</head>
<body>
    <header><h1>Unidad 4.B</h1></header>
    <main>
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <article>
                <h4>Ejercicio 1: </h4>
                Elija un numero: 
                <input type="number_format" name="num"/><br>
                <?php
                    $num = $_POST['num'];
                    $suma = 0;
                    if (is_numeric($num)) {
                        for ($i=0; $i <= $num; $i++) { 
                            if ($i%2 != 0) {
                            $suma += $i;
                        }
                    }
                    echo "La suma de los n primeros numeros impares es: " . $suma;
                    }else {
                        echo "El numero introducido no es un caracter numérico";
                    }                    
                ?>
            </article>

            <article>
                    <h4>Ejercicio 2: </h4>
                    Nombre: <input type="text" name="nombre"/><br>
                    <select name="sal" id="a">
                        <option value="1">Saludo</option>
                        <option value="2">Despedida</option>
                    </select><br>
                <?php
                    $nombre = $_POST['nombre'];
                    $seleccion = $_POST['sal'];
                    if (preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $nombre)) {
                        if ($seleccion == 1) {
                            echo "Hola " . $nombre . "!";
                        }if ($seleccion == 2) {
                            echo "Hasta la proxima " . $nombre . ".";
                        }
                    }else {
                        echo "Nombre no valido.";
                    }
                    
                ?>
            </article>

            <article>
                <h4>Ejercicio 3:</h4>
                Numero 1: <input type="number" name="num1"><br>
                Numero 2: <input type="number" name="num12"><br>
                Numero 3: <input type="number" name="num123"><br>
                Numero 4: <input type="number" name="num1234"><br>
                Numero 5: <input type="number" name="num12345"><br>
                Numero 6: <input type="number" name="num123456"><br>
                <?php
                $nombre = "num";
                $nums = array();
                for ($i=1; $i < 6; $i++) {
                    
                    if (is_numeric($_POST[$nombre])) {
                        array_push($nums, $_POST[$nombre]);
                    }
                    $nombre = $nombre.$i;
                }
                    
                    echo "La media es: " . media($nums). "<br>";
                    echo "La moda es: " . moda($nums). "<br>";
                ?>
            </article>

            <article>
                <h4>Ejercicio 4:</h4>
                1º DAW<input type="radio" name="curso" id="1"><br>
                2º DAW<input type="radio" name="curso" id="2"><br>
                Módulos: <br>
                <select name="modulos">
                    <option value="php">PHP</option>
                    <option value="js">Javascript</option>
                    <option value="css_html">css-html</option>
                    <option value="despliegue">Despliegue de aplicaciones</option>
                </select>
            </article>

            <article>
                <h4>Ejercicio 5:</h4>
                Seleccione una hora: <input type="number" name="hora"><br>
                <?php
                $hora = $_POST['hora'];
                if (is_numeric($hora) && $hora >= 0 && $hora <=24) {
                    if ($hora >= 6 && $hora <= 12) {
                        echo "Buenos dias!";
                    }elseif ($hora > 12 && $hora < 21) {
                        echo "Buenas tardes!";
                    }else {
                        echo "Buenas noches!";
                    }
                }else {
                    echo "Dato no valido.";
                }
                ?>
            </article>

            <article>
                <h4>Ejercicio 6:</h4>
                <select name="zona">
                    <?php
                        $zonas = array("America/Chicago",

                        "America/Buenos_Aires",
                        
                        "America/Detroit",
                        
                        "America/Mexico_City",
                        
                        "America/Sao_Paulo",
                        
                        "America/Toronto",
                        
                        "America/Vancouver",
                        
                        "Europe/Amsterdam",
                        
                        "Europe/Athens",
                        
                        "Europe/Berlin",
                        
                        "Europe/Brussels",
                        
                        "Europe/Copenhagen",
                        
                        "Europe/Istanbul",
                        
                        "Europe/Lisbon",
                        
                        "Europe/London");
                        $cont = -11;
                        foreach($zonas as $zona){
                            echo "<option value='" . $zona . "'>" . $zona . "</option>";
                            $cont++;
                        }
                        echo "</select><br>";
                        $e = $_REQUEST['zona'];
                        date_default_timezone_set($e);
                        echo "En " . date_default_timezone_get() . " es: " . date('d-m-Y H:i');
                    ?>
                
            </article>
            <input type="submit" name="submit" value="Submit Form"><br>
            </form>
            
        
        <article>
            <h4>Ejercicio 7:</h4>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="text" name="email"><br>
                <input type="checkbox"> Deseo recibir publicidad. <br>
                <?
                    $email = $_POST['email'];
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "Correo no valido.<br>";
                    }
                ?>
                <input type="reset" value="Borrar"></input>
                <input type="submit" name="submit" value="Enviar"><br>
            </form>
            
        </article>
        
    </main>
    <?php
function media($numeros)
{
    if (sizeof($numeros) == 0) {
        return 0;
    }else {
        return array_sum($numeros)/sizeof($numeros);    
    }
    
}
function moda($numeros)
{
    $numCont = array_count_values($numeros);
    arsort($numCont);
    return array_key_first($numCont);
}
?>
</body>
</html>