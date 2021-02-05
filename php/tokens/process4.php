<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teo Coch</title>
</head>
<body>
    <?php
        
        session_start();
        session_id($_POST['token']);
        echo $_SESSION['nombre'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        
        if(!isset($_POST['token'])){
            print('No se ha encontrado token!');
        } else {
            
            
            if(hash_equals($_POST['token'], $_SESSION['token']) === false){
                print('El token no coincide!');
            }else {
                if ($_POST['cargo'] == "si") {
                    if ($_POST['edad'] == "mayor") {
                        echo "Hola, $nombre $apellido tu puesto es profesor.";
                    }else {
                        echo "Hola, $nombre $apellido tu puesto es delegado.";
                    }
                }else {
                    if ($_POST['edad'] == "mayor") {
                        echo "Hola, $nombre $apellido tu puesto es director.";
                    }else {
                        echo "Hola, $nombre $apellido tu puesto es estudiante.";
                    }
                }
            }
        }
        echo "<a href='ejercicio4.php'>Cerrar sesión</a>";
    ?>
</body>
</html>