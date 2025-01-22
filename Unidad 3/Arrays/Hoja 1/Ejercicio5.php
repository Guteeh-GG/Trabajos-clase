<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    
<?php

// Generar 8 dígitos aleatorios entre 0 y 1
$arrayBits = [];
for ($i = 0; $i < 8; $i++) {
    $arrayBits[] = rand(0, 1); // Genera un número aleatorio entre 0 y 1
}

// Mostrar la secuencia de bits original
echo "Secuencia de bits original: ";
echo implode("", $arrayBits);  // Convertir el array a una cadena para mostrarla
echo "<br>";

// Convertir a código de Gray
$arrayGray = [];
$arrayGray[0] = $arrayBits[0]; // El primer bit de Gray es igual al primer bit de la secuencia original

for ($i = 1; $i < 8; $i++) {
    // Si los bits consecutivos son iguales, se pone un 0 en el código Gray, de lo contrario, se pone un 1
    if ($arrayBits[$i] == $arrayBits[$i - 1]) {
        $arrayGray[$i] = 0;
    } else {
        $arrayGray[$i] = 1;
    }
}

// Mostrar la secuencia de código Gray
echo "Secuencia de código de Gray: ";
echo implode("", $arrayGray);  // Convertir el array a una cadena para mostrarla
?>

</body>
</html>
1