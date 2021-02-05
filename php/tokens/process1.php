<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teo Coch</title>
</head>
<body>
    <?php
        //Debemos recordar siempre iniciar la sesión para recuperarla.
        session_start();
        session_id($_POST['token']);
        //Nos aseguramos de que el token se ha guardado en la variable $_POST.
        if(!isset($_POST['token'])){
            print('No se ha encontrado token!');
        } else {
            //Si existe, entonces debemos comprobar que el token recibido en $_POST es el que hemos almacenado en la variable de la sesión $_SESSION
            
            if(hash_equals($_POST['token'], $_SESSION['token']) === false){
                print('El token no coincide!');
            }else {
                echo "Bienvenid@ ".$_POST['nombre'];
            }
        }
    ?>
</body>
</html>