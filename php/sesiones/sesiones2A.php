<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teo Coch</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <article>
        <form action="post">
            Nombre: <input type="text" name="nombre" id=""><br>
            Apellidos: <input type="text" name="apellido" id=""><br>
            Edad: <input type="number" name="edad" id=""><br>
            Peso: <input type="number" name="" id=""><br><!-- Entre 10 y 150 -->   
            Sexo: H <input type="radio" name="sexo" value="h" id=""> M <input type="radio" name="sexo" value="m" id=""><br>
            Estado civil: <select name="ec" id="">
                <option value="soltero">Soltero</option>
                <option value="casado">Casado</option>
                <option value="viudo">Viudo</option>
                <option value="divorciado">Divorciado</option>
                <option value="otro">Otro</option>
            </select><br>
            
            <!-- (Soltero, Casado, Viudo, Divorciado, Otro) -->
            Aficiones: <br><select name="aficiones" multiple id="">
                <option value="cine">Cine</option>
                <option value="deporte">Deporte</option>
                <option value="literatura">Literatura</option>
                <option value="musica">Música</option>
                <option value="comics">Cómics</option>
                <option value="series">Series</option>
                <option value="videojuegos">Videojuegos</option>
            </select><br><!-- Cine, Deporte, Literatura, Música, Cómics,
Series, Videojuegos -->
            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </form>
    </article>
</body>
</html>