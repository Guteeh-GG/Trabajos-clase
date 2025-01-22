    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
    </head>
    <body>

    <h1>Actualize la página para ver un resultado nuevo </h1>

    <?php

    // Escriba un programa que muestre primero un grupo de entre 5 y 10 cartas al azar. Y
    // que indique cuál es la carta más alta y la más baja.

    $tiradarand = rand(5,10);

    $valorescartas = [];

    for($i = 0; $i < $tiradarand; $i++){

    $cartas = rand(1,10);
    $valorescartas [] = $cartas;

    echo "<img src='../../../EJERCICIOS 4/cartas/carta{$cartas}.jpg' style ='width:100px; height:auto;'>";

    }

    $maxcarta=max($valorescartas);

    echo "<br>";
    echo "<h3>La carta más alta es:</h3>";
    echo "<img src='../../../EJERCICIOS 4/cartas/carta{$maxcarta}.jpg' style ='width:100px; height:auto;'>";

    $mincarta=min($valorescartas);

    echo "<br>";
    echo "<h3>La carta más baja es:</h3>";
    echo "<img src='../../../EJERCICIOS 4/cartas/carta{$mincarta}.jpg' style ='width:100px; height:auto;'>";


    ?>

    </body>
    </html>