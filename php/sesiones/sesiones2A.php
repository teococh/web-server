<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teo Coch</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php

        if (isset($_POST['submit'])) {
            
            //session_start();
            $mal = "no";
            /*$nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $peso = $_POST['peso'];*/
            echo "echo";
            /*
            if (!preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $nombre)) {
                array_push($mal, $nombre);
            }if (!preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $apellido)) {
                array_push($mal, $apellido);
            }if ($edad < 10 || $edad > 100) {
                array_push($mal, $edad);
            }if ($peso > 150 || $peso < 10) {
                array_push($mal, $peso);
            }*/
            
        }

    ?>
    <article>
        <form action="">
            Nombre: <input type="text" name="nombre" id=""><br>
            Apellidos: <input type="text" name="apellido" id=""><br>
            Edad: <input type="number" name="edad" id=""><br>
            Peso: <input type="number" name="" id=""><br><!-- Entre 10 y 150 -->   
            Sexo: H <input type="radio" name="sexo" value="h" id=""> M <input type="radio" name="sexo" value="m" id=""><br>
            Estado civil: <select name="ec" id="">
                <option value="soltero">Soltero</option>
                <option value="casado">Casado</option>
                <option value="viudo">Viudo</option>
                <option value="divorciado">Divorciado</option>
                <option value="otro">Otro</option>
            </select><br>
            
            <!-- (Soltero, Casado, Viudo, Divorciado, Otro) -->
            Aficiones: <br><select name="aficiones" multiple id="">
                <option value="cine">Cine</option>
                <option value="deporte">Deporte</option>
                <option value="literatura">Literatura</option>
                <option value="musica">Música</option>
                <option value="comics">Cómics</option>
                <option value="series">Series</option>
                <option value="videojuegos">Videojuegos</option>
            </select><br><!-- Cine, Deporte, Literatura, Música, Cómics,
Series, Videojuegos -->
            <input type="submit" name="submit" class="boton">
            <input type="reset" value="Borrar">
        </form>
        <?php
        $mal = "aaa";
            echo "<h4 class='mal'>".$mal."</h4>";
            function impres($si){
                echo $si;
            }
        ?>
    </article>
    
</body>
</html>