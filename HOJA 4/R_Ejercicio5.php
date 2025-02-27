<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario final</title>
</head>
<body>
    <h2>Datos del formulario</h2>
    <p>Nombre: <?php echo htmlspecialchars($_SESSION['nombre']); ?></p>
    <p>Apellidos: <?php echo htmlspecialchars($_SESSION['apellido']); ?></p>

    <a href="Ejercicio5.php">Volver al incio</a>
</body>
</html>