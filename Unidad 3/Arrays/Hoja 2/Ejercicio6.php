<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    
<!-- Escriba un programa que muestre una tirada de un número de dados al azar entre 2 y 7
y los ordene de menor a mayor. Utiliza alguna de las funciones de ordenación. -->

<?php

$tiradaDados = rand(2,7);

$valoresDados = [];

for($i = 0; $i < $tiradaDados; $i++){

$dados = rand(1,6);
$valoresDados [] = $dados;

echo "<img src='../../../EJERCICIOS 0/Dado{$dados}.webp' style=width:100px; height:auto;>";

}

echo "<h3>Tirada de dados ordenados: </h3>";    
sort($valoresDados);

foreach ($valoresDados as $dado) {
    echo "<img src='../../../EJERCICIOS 0/Dado{$dado}.webp' style='width:100px; height:auto;'>";
}
?>

</body>
</html>