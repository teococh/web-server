<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $validado = false;
        $usuario = "";
        $apellido = "";
        $contraseña = "";
        $nombre = "";
        $email = "";
        $telefono = "";
        $movil = "";
        $direccion = "";
        $cp = "";
        $ec = "";

        $errores = array();
        include "Teo_v.php";
        if (isset($_POST['validar'])) {
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['password'];
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $movil = $_POST['movil'];
            $cp = $_POST['cp'];
            $apellido = $_POST['apellido'];

            if (usuarioValido($usuario) != "Valido") {
                $errores[] = usuarioValido($usuario);
            }
            if(nombreValido($nombre)!="Valido") {
                $errores[] = nombreValido($nombre);
            }
            if(contraValido($contraseña)!="Valido") {
                $errores[] = contraValido($contraseña);
            }
            if(correoValido($email)!="Valido") {
                $errores[] = correoValido($email);
            }
            if(fijoValido($telefono)!="Valido") {                   
                $errores[] = fijoValido($telefono);
            }
            if(movilValido($movil)!="Valido") {
                $errores[] = movilValido($movil);
            }
            if (!isset($_POST['ec'])) {
                $errores[] = "Campo estado civil vacio";
            }
            if (!isset($_POST['programacion']) && !isset($_POST['redes']) && !isset($_POST['administracion']) && !isset($_POST['seguridad'])) {
                $errores[] = "Campo Conocimientos basicos vacio";
            }


            // Nombre Apellido Email Telefono movil cp Usuario Contraseña

        
        }
        
        
        
        

    ?>
    
    <article>
        <form action="Teo.php" method="post">
            <!-- Campos tipo text -->
            Nombre <input type="text" name="nombre" value="<?php echo $nombre ?>">
            <br>
            Apellido <input type="text" name="apellido" value="<?php echo $apellido ?>">
            <br>
            Email <input type="text" name="email" id="" value="<?php echo $email ?>">
            <br>
            Telefono fijo <input type="text" name="telefono" id="" value="<?php echo $telefono ?>">
            <br>
            Telefono movil <input type="text" name="movil" id="" value="<?php echo $movil ?>">
            <br>
            Codigo Postal <input type="text" name="cp" id="" value="<?php echo $cp ?>">
            <br>
            Usuario <input type="text" name="usuario" id="" value="<?php echo $usuario ?>">
            <br> 
            <!-- Campo tipo password -->
            Contraseña <input type="password" name="password" id="" value="<?php echo $contraseña ?>">
            <br>

            <!-- Campo tipo radio -->
            Estado civil <br>
            Soltero <input type="radio" name="ec" value="soltero">
            Casado <input type="radio" name="ec" value="casado">
            Viudo <input type="radio" name="ec" value="viudo">
            Separado <input type="radio" name="ec" value="separado"><br>

            <!-- Checkbox -->
            Aporta CV <input type="checkbox" name="cv" id=""><br>

            Conocimientos especificos <br>
            Programación <input type="checkbox" name="programacion" value="Programación">
            Redes <input type="checkbox" name="redes" value="Redes">
            Administración de SO <input type="checkbox" name="administracion" value="Administración de SO">
            Seguridad <input type="checkbox" name="seguridad" value="Seguridad"><br>

            <!-- Select -->
            Puesto <br>
            <select name="experiencia" id="">
                <option value="Programador">Programador</option>
                <option value="Administración de redes">Administración de redes</option>
                <option value="Administración de SO">Administración de SO</option>
                <option value="Tecnico de seguridad">Tecnico de seguridad</option>
            </select><br>

            Experiencia <br>
            <select name="experienciaº" id="">
                <option value="Practicas">Practicas</option>
                <option value="Junior">Junior</option>
                <option value="Semi senior">Semi senior</option>
                <option value="Senior">Senior</option>
                <option value="Otro">Otro</option>
            </select>
            
            <p>
                <input type="submit" value="Validar" name="validar"/>
                <input type="reset" value="Limpiar"/>
                <input type="submit" value="Enviar" name="enviar"/>
            </p>
            
        </form>
        <?php
            
        ?>
    </article>
    
    <article>
        <?php
                echo "<ul style='color: #f00;'>";
                foreach ($errores as $error) {
                    echo "<li>".$error."</li>";
                }
                echo "</ul>";
                if (isset($_POST['enviar'])) {
                    if ($validado === false) {
                        echo "Valide antes de enviar";
                    }else {
                        $url =  'location: Teo_ok.php?usuario='.$usuario.
                        '&nombre='.$nombre.
                        '&email='.$email.
                        '&telefono='.$telefono.
                        '&movil='.$movil.
                        '&cp='.$cp;
                        header($url);
                    }
                    
                }
                if (empty($errores)) {
                    echo "<p style='color: #0000FF;'>Formulario validado <p>";
                    $validado = true;
                }
                
        ?>
    </article>

<!-- 


 -->
</body>
</html>