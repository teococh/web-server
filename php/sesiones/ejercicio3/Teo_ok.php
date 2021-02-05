<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .mal {
        color: red;
    }
    </style>
</head>
<body>
<?php
    session_start();
    session_id($_GET['id']);
    foreach ($_SESSION as $key) {
        echo $key."<br>";
    }
?>
</body>
</html>