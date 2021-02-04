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
            $bien = array();
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $peso = $_POST['peso'];
            $sexo = $_POST['sexo'];
            $estado_civil = $_POST['ec'];

            // Para guardar las aficiones en sesion tiene que ser un array
            $_SESSION['aficiones'] = array();
            foreach ($_POST['aficiones'] as $selectedOption)
                echo $selectedOption;
                //array_push($_SESSION['aficiones'], $selectedOption);    

            $validar = true;
            
            if (!preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $nombre) || $nombre == null) {
                array_push($mal, $nombre);
                $validar = false;
            }else {
                array_push($bien, $nombre);
                $_SESSION["nombre"] = $nombre;
            }
            if (!preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $apellido)) {
                array_push($mal, $apellido);
                $validar = false;
            }else {
                array_push($bien, $apellido);
                $_SESSION["apellido"] = $apellido;
                
            }
            if ($edad < 10 || $edad > 100) {
                $validar = false;
                array_push($mal, $edad);
            }else {
                array_push($bien, $edad);
                $_SESSION["edad"] = $edad;
                
            }
            if ($peso > 150 || $peso < 10) {
                $validar = false;
                array_push($mal, $peso);
            }else {
                array_push($bien, $peso);
                $_SESSION["peso"] = $peso;
            }
            if ($sexo == null) {
                array_push($mal, "sexo");
                $validar = false;
            }else {
                array_push($bien, $sexo);
                $_SESSION['sexo'] = $sexo;
            }
            if ($estado_civil == null) {
                array_push($mal, "estado civil");
                $validar = false;    
            }else {
                array_push($bien, $estado_civil);
                $_SESSION['ec'] = $estado_civil;
            }
            if (array_count_values($aficiones)) {
                array_push($mal, "aficiones");
                $validar = false;
            }else {
                array_push($bien, $aficiones);
                
            }
            
            foreach ($aficiones as $key) {
                array_push($_SESSION['aficiones'], $key);
            }

            echo "<h4 class='mal'>";
            foreach ($mal as $value) {
                echo $value;
            }
            echo "</h4>";
        }
        if ($validar) {
            print "<h4 class='validado'>El formulario está correctamente validado y preparado para su envío</h4>";
        }
        if (isset($_POST['enviar'])) {
            echo "caca" ;
        }

    ?>
    <article>
        <form action="" method="post">
            Nombre: <input type="text" name="nombre" id=""><br>
            Apellidos: <input type="text" name="apellido" id=""><br>
            Edad: <input type="number" name="edad" id=""><br>
            Peso: <input type="number" name="peso" id=""><br><!-- Entre 10 y 150 -->   
            Sexo: H <input type="radio" name="sexo" value="hombre" id=""> M <input type="radio" name="sexo" value="mujer" id=""><br>
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
            <input type="button" name="enviar" value="Enviar" href="sesiones2B.php?<?php echo 'id='. session_id(); ?>">
        </form>
        <a href="sesiones2B.php?id=<?php print session_id(); ?>">Otra página</a>
    </article>
    
</body>
</html>