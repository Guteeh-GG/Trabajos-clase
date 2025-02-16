<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valores = isset($_POST['valores']) ? $_POST['valores'] : [];
    $funcion = isset($_POST['funcion']) ? $_POST['funcion'] : 'min';

    $valores = array_map('floatval', $valores);

    switch ($funcion) {
        case 'min':
            $resultado = min($valores);
            $descripcion = "Mínimo";
            break;
        case 'max':
            $resultado = max($valores);
            $descripcion = "Máximo";
            break;
        case 'suma':
            $resultado = array_sum($valores);
            $descripcion = "Suma";
            break;
        case 'media':
            $resultado = array_sum($valores) / count($valores);
            $descripcion = "Media";
            break;
        default:
            echo "Función no válida.";
            exit;
    }

    echo "<h2>Resultado</h2>";
    echo "<p>La función seleccionada fue: <strong>$descripcion</strong></p>";
    echo "<p>Valores ingresados: " . implode(", ", $valores) . "</p>";
    echo "<p>Resultado: <strong>$resultado</strong></p>";
} 

?>
<a href="./Ejercicio7.php">Volver a la página de inicio</a>

</body>
</html>