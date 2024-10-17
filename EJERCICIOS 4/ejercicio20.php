<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20</title>
</head>
<body>
<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .cuadrado {
            display: inline-block;
            margin: 5px;
            background-color: #3498db;
        }
    </style>
</head>
<body>

<?php

echo "Actualiza la página para ver los cuadrados de diferentes tamaños";

$tamaño1 = rand(50, 150);
$tamaño2 = rand(50, 150);
$tamaño3 = rand(50, 150);

echo "<div class='cuadrado' style='width: {$tamaño1}px; height: {$tamaño1}px;'></div>";
echo "<div class='cuadrado' style='width: {$tamaño2}px; height: {$tamaño2}px;'></div>";
echo "<div class='cuadrado' style='width: {$tamaño3}px; height: {$tamaño3}px;'></div>";

?>

</body>
</html>
</body>
</html>