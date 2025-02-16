<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R_ejercicio 6</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellidos = htmlspecialchars($_POST['apellidos']);
    $telefono = htmlspecialchars($_POST['tlfn']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $poblacion = htmlspecialchars($_POST['poblacion']);
    $provincia = htmlspecialchars($_POST['provincia']);
    $nacimiento = htmlspecialchars($_POST['nacimiento']);
    $estudios = htmlspecialchars($_POST['estudios']);

    $alumno = [
        'Nombre' => $nombre,
        'Apellidos' => $apellidos,
        'Teléfono' => $telefono,
        'Dirección' => $direccion,
        'Población' => $poblacion,
        'Provincia' => $provincia,
        'Fecha de nacimiento' => $nacimiento,
        'Estudios' => $estudios
    ];

    echo "<h2>Información del Alumno</h2>";
    echo "<table border='1' cellspacing='0' cellpadding='10'>";
    echo "<tr><th>Campo</th><th>Valor</th></tr>";
    
    foreach ($alumno as $campo => $valor) {
        echo "<tr><td><strong>$campo</strong></td><td>$valor</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>No se ha enviado el formulario.</p>";
}
?>
<a href="./Ejercicio6.php">Volver a la página anterior</a>
</body>
</html>