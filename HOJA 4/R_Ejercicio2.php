<?php
session_start();

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guardar el texto en la sesión si existe, o redirigir si está vacío
    if (!empty($_POST["texto"])) {
        $_SESSION["texto"] = $_POST["texto"];
    } else {
        header("Location: Ejercicio2.php"); // Redirige si no se ingresó texto
        exit(); // Detiene la ejecución del script
    }
}

$mensaje = "Texto ingresado: " . htmlspecialchars($_SESSION["texto"]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>
    <p><?php echo $mensaje; ?></p>

    <form action="Ejercicio2.php" method="get">
        <input type="submit" value="Volver">
    </form>
</body>
</html>
