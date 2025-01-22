<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    
<?php

// Escriba un programa que muestre una tirada de dado al azar y escriba en letras el valor obtenido. Haz uso de un array.

$dados = array("Uno", "Dos", "Tres", "Cuatro", "Cinco", "Seis");

$tirada = rand(1, 6);

echo "El valor del dado es: " . $dados[$tirada - 1]; // Restar 1 porque los índices de arrays comienzan en 0

echo "<br><img src='../../EJERCICIOS 0/Dado{$tirada}.webp'>";

?>

</body>
</html>
eresfeo13