<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

<h1>Actualice la página para mostrar un nuevo resultado</h1>

<?php

// ● que muestre primero un grupo de entre 10 y 20 emoticonos al azar (rango unicode:
// 128512 a 128580).
// ● que indique si un emoticono al azar (del mismo rango unicode) está en el grupo o no.

$start = 128512;
$end = 128550;

$arrayEmojis = [];
$emojisrand = rand(10,20);

for ($i=0; $i < $emojisrand; $i++){

    $tirada = rand($start, $end);

    $arrayEmojis[] = "&#" . $tirada . ";";

}

echo "<p>Emojis generados: " . implode(' ', $arrayEmojis) . "</p>";

$unEmoji = "&#" . rand($start, $end) . ";";
echo "<br>";
echo "<h3>Un emoji aletorio: $unEmoji </h3>";

if (in_array($unEmoji, $arrayEmojis)) {
    echo "<p>¡El emoji está en el grupo!</p>";
} else {
    echo "<p>El emoji NO está en el grupo.</p>";
}

?>
    
</body>
</html>