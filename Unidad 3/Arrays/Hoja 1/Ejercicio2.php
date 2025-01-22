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

$animales = array("ballena.jpg", "caballito-de-mar.jpg", "conejo.jpg", "elefante.jpg", "giraffe.jpg"); 
$nombresAnimales = array("ballena", "caballito de mar", "conejo", "elefante", "giraffe");

$index = rand(1, count($animales)); //Funcion para sacar el animal aleatorio empezando desde 1 y contando los que hay, ya que son Strings

echo "<img src='./animales/animales{$index}.jpg'>"; 

echo "<br>{$nombresAnimales[$index -1]}"; //IMPORTANTE EN EL INDEX QUE ES DONDE HEMOS ALEATORIZADO LAS FICHAS, RESTAR 1 YA QUE ES UN ARRAY Y TIENE QUE EMPEZAR A SACAR FICHAS DESDE 1

// 3.2. Con una matriz de dos dimensiones:
// Cree una matriz en la que cada elemento sea una matriz con el nombre del animal
// ("Ballena", "Caballito de mar", etc.) y el nombre del fichero ("ballena.png",
// "caballito-mar.png", etc.) como elementos. Elija un valor del índice al azar para
// mostrar tanto el dibujo como el texto.

$animalesMatriz = array(
    array("nombre" => "ballena", "fichero" => "ballena.jpg"),
    array("nombre" => "caballito de mar", "fichero" => "caballito-de-mar.jpg"),
    array("nombre" => "conejo", "fichero" => "conejo.jpg"),
    array("nombre" => "elefante", "fichero" => "elefante.jpg"),);

// El array asocitivo para mostrar el animal relacionado a su ficha.

$index = rand(1, count($animalesMatriz));

echo "<img src='./animales/animales{$index}.jpg'>";

echo "<br>{$animalesMatriz[$index -1]["nombre"]}";

// El mismo proceso para mostrar el animal y su ficha correspondiente.

 ?>
</body>
</html>