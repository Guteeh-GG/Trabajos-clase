<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>

<?php

//Generar 3 secuenccias de 10 bits y el cuarto que sea con la secuencia mas repetida por posicion

$arrayBits = [];
$arrayBits2 = [];
$arrayBits3 = [];
for ($i = 0; $i < 10; $i++) {
    $arrayBits[] = rand(0, 1);
    $arrayBits2[] = rand(0, 1);
    $arrayBits3[] = rand(0, 1);

}

echo implode("", $arrayBits);  // Convertir el array a una cadena para mostrarla
echo "<br>";
echo implode("", $arrayBits2);  // Convertir el array a una cadena para mostrarla
echo "<br>";
echo implode("", $arrayBits3);  // Convertir el array a una cadena para mostrarla
echo "<br>";

$arrayBits4 = [];

for ($i = 0; $i < 10; $i++){

    $count0 = ($arrayBits[$i] === 0 ? 1 : 0) + ($arrayBits2[$i] === 0 ? 1 : 0) + ($arrayBits3[$i] === 0 ? 1 : 0); //operador ternario para hacer mas simple la comprobacion y recorrido del array
    $count1 = 3 - $count0; // Si no es 0, entonces es 1
    $arrayBits4[] = $count0 > $count1 ? 0 : 1;

    } 

        echo "El 4 array con los bits más repetidos es el siguiente" .implode("", $arrayBits4) . "<br>"

?>
    
</body>
</html>