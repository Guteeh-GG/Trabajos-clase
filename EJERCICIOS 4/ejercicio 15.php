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

echo "Carta 1: <img src='cartas/carta{$carta1}.jpg'>";
echo "Carta 2: <img src='cartas/carta{$carta2}.jpg'>";
echo "Carta 3: <img src='cartas/carta{$carta3}.jpg'>";
$maxCarta = max($carta1, $carta2, $carta3);

echo "La carta más alta es: $maxCarta<br>";
echo "<img src='Imagenes/cartas/$maxCarta.jpg' alt='Carta $maxCarta'>";

?>

</body>
</html>