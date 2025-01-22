<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

<h1>Actualice la página para ver un nuevo resultado</h1>

<?php
// Escriba un programa:
// ● que muestre primero un grupo de entre 5 y 10 cartas de tréboles al azar.
// ● que indique y muestre cuál es la carta más alta del grupo.
// ● que elimine esa carta del grupo (puede haber varias) y muestre el grupo restante.
// ● que indique cuál es la carta más alta del grupo restante.

$tiradarand = rand(5, 10);

$valorescartas = [];

echo "<h3>Grupo inicial de cartas:</h3>";
for ($i = 0; $i < $tiradarand; $i++) {
    $carta = rand(1, 10);
    $valorescartas[] = $carta;
    echo "<img src='../../../EJERCICIOS 4/cartas/carta{$carta}.jpg' style='width:100px; height:auto;'>";
}

$maxcarta = max($valorescartas);

echo "<br><h3>La carta más alta es:</h3>";
echo "<img src='../../../EJERCICIOS 4/cartas/carta{$maxcarta}.jpg' style='width:100px; height:auto;'>";

$valoresFiltrados = [];
foreach ($valorescartas as $carta) {
    $carta != $maxcarta ? $valoresFiltrados[] = $carta : null;
}   

echo "<br><h3>Grupo restante de cartas:</h3>";

foreach ($valoresFiltrados as $cartaFiltrada) {
echo "<img src='../../../EJERCICIOS 4/cartas/carta{$cartaFiltrada}.jpg' style='width:100px; height:auto;'>";

    }

    $maxCartaFinal = max($valoresFiltrados);
    echo "<br><h3>La carta más alta del grupo restante es:</h3>";
    echo "<img src='../../../EJERCICIOS 4/cartas/carta{$maxCartaFinal}.jpg' style='width:100px; height:auto;'>";

?>

</body>
</html>
