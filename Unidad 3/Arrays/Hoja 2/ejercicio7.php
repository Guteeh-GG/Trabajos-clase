        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ejercicio 7</title>
        </head>
        <body>
            
        <!-- Escriba un programa:
        ● que muestre una mano de entre 5 y 10 cartas del 1 al 5 al azar (rango unicode:
        127169 a 127173).
        ● que muestre las cartas que han salido, sin repetir y ordenándolas de menor a mayor.
        ● que muestre cuántas cartas han salido de cada (sin ordenar).
        ● que muestre cuántas cartas han salido de cada, ordenándolas de mayor a menor
        número de cartas obtenido. -->

        <?php

        $manoCartas = rand(5,10);

        $valoresCartas = [];

        for($i = 0; $i < $manoCartas; $i++){

        $mano = rand(1,5);
        $valoresCartas [] = $mano;

        echo "<img src='../../../EJERCICIOS 4/cartas/carta{$mano}.jpg' style ='width:100px; height:auto;'>";

        }

        // Eliminar duplicados y ordenar las cartas de menor a mayor

        $cartasUnicas = array_unique($valoresCartas);
        sort($cartasUnicas);

        // Mostrar las cartas sin repetir, ordenadas

        echo "<h3>Cartas únicas, ordenadas de menor a mayor:</h3>";
        foreach ($cartasUnicas as $carta) {
        echo "<img src='../../../EJERCICIOS 4/cartas/carta{$carta}.jpg' style='width:100px; height:auto;'>";
        }

        //cartas que han salido de cada sin ordenar

        $conteoCartas = array_count_values($valoresCartas);
        echo "<p>Conteo de cartas:</p>";
        echo "<ul>";

        foreach ($conteoCartas as $cartas => $cantidad) {
        echo "<li>$cartas: $cantidad veces</li>";

        }
        
        echo "</ul>";

        // Ordenar las cartas por la cantidad de veces que han salido (de mayor a menor)
        arsort($conteoCartas);

        // Mostrar cuántas cartas han salido, ordenadas de mayor a menor cantidad

        echo "<h3>Conteo de cartas (ordenado de mayor a menor cantidad):</h3>";
        echo "<ul>";
        foreach ($conteoCartas as $carta => $cantidad) {
        echo "<li>Carta $carta: $cantidad veces</li>";

        }

        echo "</ul>";

        ?>

        </body>
        </html>