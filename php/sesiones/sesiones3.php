<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teo Coch</title>
</head>
<body>
<?php

session_start();

if (empty($_SESSION['count'])) {
   $_SESSION['count'] = 1;
} else {
   $_SESSION['count']++;
}
?>

<p>
Hola visitante, ha visto esta página <?php echo $_SESSION['count']; ?> veces.
</p>

<p>
Para continuar, <a href="nextpage.php?<?php echo htmlspecialchars(SID); ?>">haga clic
aquí</a>.
</p>
</body>
</html>