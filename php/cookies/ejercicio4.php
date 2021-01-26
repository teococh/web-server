<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teo Coch</title>
</head>
<body>
    <article>
        <h4>Ejercicio 7:</h4>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <input type="text" name="email"><br>
            <input type="checkbox" name="publicidad" value="1"> Deseo recibir publicidad. <br>
            <input type="reset" value="Borrar"></input>
            <input type="submit" name="submit" value="Enviar"><br>
        </form>
            
        <?php
            $email = $_POST['email'];
            $valor;
            if (!empty($_POST["publicidad"])) {
                $valor = "true";
                setcookie("galleta", $valor, 10000000000);
            }else {
                $valor = "false";
                setcookie("galleta", $valor, 10000000000);
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Correo no valido.<br>";
            }else{
                echo "Su correo es: ".$email."<br>";
            }
            echo $_COOKIE['galleta'];
        ?>
    </article>
</body>
</html>