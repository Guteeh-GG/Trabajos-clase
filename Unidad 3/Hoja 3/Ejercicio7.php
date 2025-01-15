    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 7</title>
    </head>
    <body>
        
    <?php

    // Escriba un programa:
    // ● que muestre primero una tirada de un número de dados al azar entre 1 y 10
    // ● que muestre a continuación un dado al azar.
    // ● que muestre de nuevo la tirada inicial, pero habiendo eliminado de la tirada los
    // dados que coincidan con el dado suelto (si hay alguno).

    $Mensaje = "Actualiza la página para ver otro resultado";
            echo $Mensaje;
            echo "<br>";
            $randado = rand (1,10);
        ?>
                <?php

            $valoresDados = [];
    for ($i = 0 ; $i < $randado; $i++ ){

    $Dado = rand(1,6);
    $valoresDados[] = $Dado;


    echo "<img src='../../EJERCICIOS 0/Dado{$Dado}.webp'>";


    }

    $undado = $valoresDados[array_rand($valoresDados)];
    echo "<br>";
    echo "<h3>Tirada dado suelto</h3>";
    echo "<img src='../../EJERCICIOS 0/Dado{$undado}.webp'>";
    echo "<br>";

    echo "<h3>Tirada eliminando los valores repetidos</h3>";
    echo "<br>";

    $valoresFiltrados = [];

    for ($i = 0; $i < count($valoresDados); $i++) {

    // Si el valor no coincide con el dado suelto, lo añadimos al array filtrado

    $valoresDados[$i] != $undado ? $valoresFiltrados[] = $valoresDados[$i] : null;

    }

    foreach ($valoresFiltrados as $tiradaFinal) {   
    echo "<img src='../../EJERCICIOS 0/Dado{$tiradaFinal}.webp' alt='Dado {$valor}' width='50'>";

    }


    ?>

    </body>
    </html>