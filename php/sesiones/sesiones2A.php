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
        
        if (isset($_POST['validar'])) {
            session_start();
            
            $mal = array();
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $peso = $_POST['peso'];
            $validar = true;
            
            if (!preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $nombre)) {
                array_push($mal, $nombre);
                $validar = false;
            }if (!preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $apellido)) {
                array_push($mal, $apellido);
                $validar = false;
            }if ($edad < 10 || $edad > 100) {
                $validar = false;
                array_push($mal, $edad);
            }if ($peso > 150 || $peso < 10) {
                $validar = false;
                array_push($mal, $peso);
            }

            if ($validar) {
                echo "<h4 class='mal'>sesion</h4>";
            }
            $_SESSION["nombre"] = $nombre;
            $_SESSION["apellido"] = $apellido;
            $_SESSION["edad"] = $edad;
            $_SESSION["peso"] = $peso;
            $_SESSION["mal"] = $mal;
            foreach ($mal as $key => $value) {
                echo "<h4 class='mal'>$value</h4>";
            }
        }

        if (isset($_POST['enviar']) && $validar) {
            
           
            
        }

    ?>
    <article>
        <form action="" method="post">
            Nombre: <input type="text" name="nombre" id=""><br>
            Apellidos: <input type="text" name="apellido" id=""><br>
            Edad: <input type="number" name="edad" id=""><br>
            Peso: <input type="number" name="peso" id=""><br><!-- Entre 10 y 150 -->   
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
            <input type="submit" name="validar" class="boton" value="validar">
            <input type="button" name="enviar" value="Enviar"href="sesiones2B.php?<?php echo 'id='. session_id(); ?>">
        </form>
        Para continuar, <a href="sesiones2B.php?<?php echo 'id='. session_id(); ?>">haga clic
aquí</a>.
    </article>
    
</body>
</html>