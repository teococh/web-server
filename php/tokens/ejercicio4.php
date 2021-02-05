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
    session_destroy();
    session_start();
    $token = bin2hex(openssl_random_pseudo_bytes(24));
    $_SESSION["token"] = $token;
?>

    <form action="process4.php" method="post">
        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="text" name="apellido" placeholder="Apellido"><br>
        <input type="text" name="asignatura"placeholder="Asignatura"><br>
        Cargo: Si <input type="radio" name="cargo" value="si"> <input type="radio" name="cargo" value="no"><br>
        <select name="edad">
            <option value="mayor">Mayor de edad</option>
            <option value="menor">Menor de edad</option>
        </select>
        <input type="submit" value="enviar">
    </form>
    



</body>
</html>