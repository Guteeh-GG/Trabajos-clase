<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio13</title>
</head>
<body>
    
<div>

<?php

$numLineas = rand(3,10);
$origenX = 0;
$origenY = 0; //Definimos el punto de origen en un "plano" L, si queremos cambiar desde donde se inicia el dibujo, deberemos cambiar los dos valores
$anchoMax = 300;
$altoMax = 300; // Definimos hasta donde van a estar dibujadas la líneas

echo "<p>Actualiza la página para ver un número de líneas distintas</p>";

?>
</div>

<div>

<svg witdh="300" height="300" style="border:1px solid #000;"> <!-- definimos con un svg como van a ser las líneas que dibujemos -->

<?php

for ($i=0; $i < $numLineas; $i++){

$puntoFinalX = rand(0,$anchoMax);
$puntoFinalY = rand(0,$altoMax); //Estas dos variables sería para definir donde van a acabar cada punto

echo "<line x1='$origenX' y1='$origenY' x2='$puntoFinalX' y2='$puntoFinalY' stroke='black' stroke-witdh='2' />";  //Tenemos que escribir los puntos de origen en los planos x e y 
//también en el mismo plano, los puntos finales que hemos definido en el bucle, que abarcaría desde 0 hasta 300, que es lo que hemos definido como máximo

}

?>
</svg>
</div>
</body>
</html>