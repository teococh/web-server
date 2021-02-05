<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teo Coch Catalan 2ºDAW</title>
    <style>
    article {
    width: 80%;
    margin: 20px auto 0px auto;
    border: 1px gray solid;
    box-shadow: 5px 5px gray;
    background-color: rgba(250, 250, 250, 0.7);
    padding: 2rem;
    }
    body {
        background-color: aqua;
    }
    input {
        margin: 0.5rem 1rem 0.5rem 1rem;
    }
    .boton {
        margin-left: 0;
    }
    .mal {
        color: red;
    }
    </style>
</head>
<body>
    <?php
    include './Teo_v.php';

        session_start();
    
        $usuario;
        $password;
        $nombre;
        $email;
        $fijo;
        $movil;
        $codigoPostal;
        $publicidad;
        $novela;
        $edad;
        if (isset($_POST['validar'])) {
            echo vUsuario($_POST['usuario']);
            $_SESSION['usuario'] = vUsuario($_POST['usuario']);
            $_SESSION['passwd'] = vPassword($_POST['password']);
            $_SESSION['nombre'] = vNombre($_POST['nombre']);
            $_SESSION['email'] = vEmail($_POST['email']);
            $_SESSION['fijo'] = vFijo($_POST['fijo']);
            $_SESSION['movil'] = vMovil($_POST['movil']);
            $_SESSION['cp'] = $_POST['cp'];
            validacion();
        }/*
        if (isset($_POST['enviar'])) {
            $url = "./Teo_ok.php?id=".session_id();
            header("Location: .$url");
            die();
        }*/
    ?>
    <article id="ejercicio1">
        <form action="" method="post">
            <label>Usuario: </label><input type="text" name="usuario" value="<?php echo $usuario;?>" /><br>
            <label>Password: </label><input type="password" name="password" value="<?php echo $password;?>" /><br>
            <label>Nombre: </label><input type="text" name="nombre" value="<?php echo $nombre;?>" ><br>
            <label>Email: </label><input type="text" name="email" value="<?php echo $email;?>" /><br>
            <label>Telefono fijo: </label><input type="text" name="fijo" value="<?php echo $fijo;?>" ><br>
            <label>Telefono móvil: </label><input type="text" name="movil" value="<?php echo $movil;?>" ><br>
            <label>Codigo postal: </label><input type="text" name="cp" value="<?php echo $codigoPostal;?>" ><br>
            Homre: <input type="radio" name="sexo" value="h"> Mujer: <input type="radio" name="sexo" value="h" ><br>
            <label>Acepto LOPDGDD </label><input type="checkbox" name="terms" ><br>
            <label>Nos ha conocido a traves de... </label><br>
            <select multiple name="publicidad[]" >
                <option value="web">Web</option>
                <option value="prensa">Prensa</option>
                <option value="conocidos">Conocidos</option>
                <option value="otro">Otro</option>
            </select><br>
            <label>Si lectura ideal es sobre... </label><br>
            <select multiple name="novelas[]" >
                <option value="historia">História</option>
                <option value="misterio">Misterio</option>
                <option value="romance">Romance</option>
                <option value="terror">Terror</option>
                <option value="comic">Comic</option>
            </select><br>
            <label>Tengo... </label><br>
            <select name='edad' >
                <option value="1-5">1-5 años</option>
                <option value="6-11">6-11 años</option>
                <option value="12-15">12-15 años</option>
                <option value="16-18">16-18 años</option>
                <option value="18">mas de 18 años</option>
            </select><br>
            <input type="submit" name="enviar" value="Enviar" class="boton">
            <input type="reset" name="borrar" value="Borrar" class="boton">
            <input type="submit" name="validar" value="Validar" class="boton">
        </form>
        <a href="Teo_ok.php?id=<?php print session_id(); ?>">Validado</a>
    </article>
    <?php
        function validacion(){
            foreach ($_SESSION as $key) {
                echo $key." ";
            }
        }
    ?>
</body>
</html>