<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teo Coch</title>
</head>
<body>

    <form action="">

        Nombre del empleado: <input type="text" name="nombre" id=""><br>
        Empleo: <input type="text" name="empleo" id=""><br>
        <input type="submit" value="submit" name="send">

    </form>

    <?php
    if (isset($_POST['send'])) {
        session_start();
        $hora = date('H:i');
        $session_id = session_id();
        $token = hash("sha256", $hora.$session_id.$_POST['nombre'].$_POST['empleo']);
         
        $_SESSION['token'] = $token;
         
        echo $_SESSION['token'];
    }
        
    ?>

</body>
</html>