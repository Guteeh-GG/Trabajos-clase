<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de datos Ejercicio 1: Nombre</title>
</head>
<body>
    <h1>Recogida de los datos</h1>
    <?php

echo "<p>El nombre introducido es: <strong>" . ($_GET['nombre'] !== ' ' ? $_GET['nombre'] : 'no se ha introduce un nombre') . "</strong></p>";

    ?>
    </br>
    <a href="./Ejercicio1.php">Volver a la página anterior</a>
</body>
</html>