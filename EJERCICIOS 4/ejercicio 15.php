<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
  
<?php

echo "Actualice la página web para mostrar diferentes cartas y ver la más alta.<br><br>";

$carta1 = rand(1, 10);
$carta2 = rand(1, 10);
$carta3 = rand(1, 10);

echo "Carta 1: <img src='EJERCICIOS 4/cartas/$carta1.jpg' alt='Carta $carta1'><br>";
echo "Carta 2: <img src='EJERCICIOS 4/cartas/$carta2.jpg' alt='Carta $carta2'><br>";
echo "Carta 3: <img src='EJERCICIOS 4/cartas/$carta3.jpg' alt='Carta $carta3'><br><br>";

$maxCarta = max($carta1, $carta2, $carta3);

echo "La carta más alta es: $maxCarta<br>";
echo "<img src='Imagenes/cartas/$maxCarta.jpg' alt='Carta $maxCarta'>";

?>

</body>
</html>