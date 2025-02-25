<?php
// Iniciar sesión para almacenar el último texto ingresado
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION["texto"] = isset($_POST["texto"]) ? $_POST["texto"] : "";
}

$mensaje = empty($_SESSION["texto"]) ? "No se ha ingresado ningún texto." : "Texto ingresado: " . htmlspecialchars($_SESSION["texto"]);
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

    <form action="Ejercicio1.php" method="get">
        <input type="submit" value="Volver">
    </form>
</body>
</html>
