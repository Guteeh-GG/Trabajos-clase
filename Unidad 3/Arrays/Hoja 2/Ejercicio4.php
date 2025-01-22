<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    
<!-- Escriba un programa:
● que muestre primero un grupo de entre 7 y 20 corazones al azar (rango unicode:
128147 a 128152).
● que indique cuántas veces ha aparecido cada corazón. -->

<?php

$start = 128147;
$end = 128152;

$arrayCorazones = [];
$emojisrand = rand(7,20);

for ($i = 0; $i < $emojisrand; $i++){

$tirada = rand($start, $end);
$arrayCorazones[] = "&#" . $tirada . ";";

}

echo "<p>Corazones generados: " . implode(' ', $arrayCorazones) . "<p>";

//contamos dentro del array cuantas veces ha aparecido cada emoji de corazon (funcion count? dentro de un for?)

$conteoCorazones = array_count_values($arrayCorazones);
echo "<p>Conteo de corazones:</p>";
echo "<ul>";
foreach ($conteoCorazones as $corazon => $cantidad) {
    echo "<li>$corazon: $cantidad veces</li>";
}
echo "</ul>";

?>

</body>
</html>