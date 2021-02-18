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
    $nombre = "";
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
    }
?>

    <article>
        <form action="" method="post">
            Cosas <input type="text" name="nombre" value="<?php echo $nombre ?>"><br>
            <input type="submit" value="enviar" name="enviar">
            <?php echo $nombre;?>
        </form>
    </article>
    
</body>
</html>