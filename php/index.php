<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teo Coch</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php 

    $usuarioV = "";
    $passwdV = "";
    $nombreV = "";
    $emailV = "";
    $telefonoV = "";
    $movilV = "";
    $direccionV = "";
    $cpV = "";
    $usuario = "";
    $contraseña = "";
    $nombre = "";
    $email = "";
    $telefono = "";
    $movil = "";
    $direccion = "";
    $cp = "";
    $terminos = "ckecked";
    $enviar = "";
    
    include "validaciones.php";
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['password'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $movil = $_POST['movil'];
        $direccion = $_POST['direccion'];
        $cp = $_POST['cp'];
        $usuarioV = usuarioValido($usuario);
        $passwdV = contraValido($contraseña);
        $nombreV = nombreValido($nombre);
        $emailV = correoValido($email);
        $telefonoV = fijoValido($telefono);
        $movilV = movilValido($movil);
        $direccionV = direccionValido($direccion);
        $cpV = cpValido($cp);
    
    
?>

    <article>
        <form action="index.php" method="post">
            Usuario <input type="text" name="usuario" id="" value="<?php echo $usuario ?>">
            <?php echo $usuarioV ?>
            <br> 

            Contraseña <input type="password" name="password" id="" value="<?php echo $contraseña ?>">
            <?php echo $passwdV ?>
            <br>
            Nombre <input type="text" name="nombre" value="<?php echo $nombre ?>">
            <?php echo $nombreV ?>
            <br>
            Email <input type="text" name="email" id="" value="<?php echo $email ?>">
            <?php echo $emailV ?>
            <br>
            Telefono <input type="text" name="telefono" id="" value="<?php echo $telefono ?>">
            <?php echo $telefonoV ?>
            <br>
            Movil <input type="text" name="movil" id="" value="<?php echo $movil ?>">
            <?php echo $movilV ?>
            <br>
            Direccion <input type="text" name="direccion" id="" value="<?php echo $direccion ?>">
            <?php echo $direccionV ?>
            <br>
            CP <input type="text" name="cp" id="" value="<?php echo $cp ?>">
            <?php echo $cpV ?>
            <br>
            Sexo <br>
            Hombre <input type="radio" name="sexo" value="hombre"> Mujer <input type="radio" name="sexo" value="mujer"><br>
            Acepto LOPDGDD <input type="checkbox" name="terminos" <?php echo $terminos ?>><br>
            Como nos ha conocido <br>
            <select name="publicidad" id="" multiple>
                <option value="Web">Web</option>
                <option value="Prensa">Prensa</option>
                <option value="Conocidos">Conocidos</option>
                <option value="Otro">Otro</option>
            </select><br>
            Lecturas preferidas <br>
            Histórica <input type="checkbox" name="Histórica" id="">
            Misterio <input type="checkbox" name="Misterio" id="">
            Romántica <input type="checkbox" name="Romántica" id="">
            Terror <input type="checkbox" name="Terror" id="">
            Comic <input type="checkbox" name="Comic" id=""> <br>
            Tipo de Usuario <br>
            <select name="edad" id="">
                <option value="1-5">Infantil (1-5 años)</option>
                <option value="6-11">Infantil (6-11 años)</option>
                <option value="12-15">Juvenil (12-15 años)</option>
                <option value="16-18">Juvenil (16-18 años)</option>
                <option value="18+">Adulto (más de 18 años)</option>
            </select><br>


            <p>
                <input type="submit" value="Validar" name="validar"/>
                <input type="reset" value="Limpiar"/>
                <input type="submit" value="Enviar" name="enviar"/>
            </p>
        </form>
        <!-- Usuario, Password, Nombre, Email, Tel. Fijo, Tel. Móvil, Dirección, CP, Sexo (RADIO), Si acepta o no LOPDGDD (1 CHECKBOX),
         Cómo nos ha conocido ( Web-Prensa-Conocidos-Otro pudiendo seleccionar varios - MULTISELECT). 
         Además indicará sus Preferencias en novela (Histórica-Misterio-Romántica-Terror-Comic pudiendo marcar varios - CHECKBOX) y 
         Tipo de Usuario (Infantil (1-5 años)-Infantil (6-11 años)- Juvenil (12-15 años)-Juvenil (16-18 años)-Adulto (más de 18 años), 
         pudiendo seleccionar sólo uno de ellos - SELECT) -->
    </article>

    <?php

        if (isset($_POST['enviar'])) {
            $url = 'location: Teo_ok.php?nombre='.$nombre;
            header($url);
        }

    ?>
    
</body>
</html>