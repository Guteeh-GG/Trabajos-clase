<!-- Ejercicio 1: Creación de Arrays

Crea un array indexado numéricamente con los nombres de 5 ciudades.

Imprime el tercer elemento del array.

Usa un bucle for para mostrar todos los elementos del array. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    
<?php

    $cities = array("Madrid", "Barcelona", "London", "Paris", "Berlin");
    echo "El tercer elemento del array es: ". $cities[2]. "<br>";

    for ($i = 0; $i < count($cities); $i++) {
        echo "Ciudad ".($i+1).": ". $cities[$i]. "<br>";
    }   

?>

</body>
</html>