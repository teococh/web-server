<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    $token = bin2hex(openssl_random_pseudo_bytes(24));
    $_SESSION["token"] = $token;
?>
    
    <form action="process2.php" method="post">
        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="text" name="apellido"placeholder="Apellido"><br>
        <input type="text" name="asignatura" placeholder="Asignatura"><br>
        <select name="edad">
            <option value="mayor">mayor de edad</option>
            <option value="menor">menor de edad</option>
        </select><br>
        Cargo: Si <input type="radio" name="cargo" value="si">No <input type="radio" name="cargo" value="no"><br>
        Grupo: A<input type="radio" name="grupo" value="a">B<input type="radio" name="grupo" value="b"><br>
        <input type="submit" value="submit">
    </form>

</body>
</html>