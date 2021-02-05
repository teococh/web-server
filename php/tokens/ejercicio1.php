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
    $token = bin2hex(openssl_random_pseudo_bytes(24));
    $_SESSION["token"] = $token;
?>
<form action="process1.php" method="post">
    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
    <input type="text" name="nombre" placeholder="Su nombre"><br>
    <input type="text" name="empleo" placeholder="Su empleo">
    <input type="submit" name="submit_form">
</form>

</body>
</html>