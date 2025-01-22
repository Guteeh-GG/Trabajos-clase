<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Actualize la página para obtener un nuevo resultado</h1>
    <?php

$matrizColores= array( "&#127995;","&#127996;", "&#127997;", "&#127998;", "&#127999;");

$randIndex= array_rand($matrizColores);
$colorAleatorio= $matrizColores[$randIndex];

$matrizEmojis = array("&#128077;", "&#128078;", "&#9995;", "&#128400;", "&#128076;"); // 👍 👎 ✋ 🤛 👌

$randIndexBase= array_rand($matrizEmojis);
$randEmojis=$matrizEmojis[$randIndexBase];

//Con estas funciones lo que haremos será generar un color aleatorio dentro del array que hemos generado con anterioridad al igual que con los emojis de manos.

// Concatenar el emoji con el modificador de color de piel
$emojiConColor = $randEmojis . $colorAleatorio;

// Mostrar el emoji con color
echo "<p style='font-size: 3em;'>{$emojiConColor}</p>"; 

?>  

</body>
</html>