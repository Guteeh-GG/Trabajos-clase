<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    
<?php

// Escriba un programa que muestre un animal al azar y su nombre.

// Haz este ejercicio de dos formas:
// 3.1. Con dos matrices de una dimensión:
// Cree dos matrices, una con los nombres de los ficheros ("ballena.png",
// "caballito-mar.png", etc.) y otra con los nombres de los animales ("Ballena",
// "Caballito de mar", etc.), en el mismo orden. Elija un valor del índice al azar para
// mostrar tanto el dibujo como el texto.

$animals = array("ballena.jpg", "caballito-de-mar.jpg", "conejo.jpg", "elefante.jpg", "giraffe.jpg");
$nombresAnimales = array("Ballena", "Caballito de mar", "Conejo", "Elefante", "Giraffe");

$index = rand(0, count($animals) - 1);

echo "<img src='/Unidad 3/Hoja 3/animales{$animals[$index]}.jpg'>";

echo "<br>{$nombresAnimales[$index]}";

// 3.2. Con una matriz de dos dimensiones:
// Cree una matriz en la que cada elemento sea una matriz con el nombre del animal
// ("Ballena", "Caballito de mar", etc.) y el nombre del fichero ("ballena.png",
// "caballito-mar.png", etc.) como elementos. Elija un valor del índice al azar para
// mostrar tanto el dibujo como el texto.




?>


</body>
</html>