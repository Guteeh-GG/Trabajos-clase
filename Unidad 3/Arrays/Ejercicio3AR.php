<!-- Ejercicio 2: Arrays Asociativos

Define un array asociativo con 3 países y sus respectivas capitales.

Usa un bucle foreach para imprimir las claves y valores. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

<?php

    $countries = array(
        "Spain" => "Madrid",
        "France" => "Paris",
        "Germany" => "Berlin"
    ); //Siempre el primer valor dentro de un array asociativo es la clave

    foreach ($countries as $country => $capital) {
        echo "País: $country - Capital: $capital <br>";
    }

?>
    
</body>
</html>