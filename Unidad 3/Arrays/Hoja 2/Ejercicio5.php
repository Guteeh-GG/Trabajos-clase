<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>

<!-- Escriba un programa:
● que muestre primero todos los emoticonos. Los emoticonos se encuentran en los
rangos 128512 al 128580, 129296 al 129303, 129312 al 129327, 129392, 129393,
129395 al 129398, 129402 y 129488.
● que muestre uno de esos emoticonos al azar. -->

<?php

    $arrayEmojis = array_merge(
        range(128512, 128580),  
        range(129296, 129303),
        range(129312, 129327),
        range(129392, 129393),
        range(129395, 129398),
        range(129402, 129488),  
    );  

    echo "<h3>Lista de emojis</h3>";

    foreach($arrayEmojis as $emojis){

        echo "&#$emojis";
    
    }

    $emojirand = $arrayEmojis[array_rand($arrayEmojis)];
    echo "<h3>Un emoji random: &#$emojirand;</h3>";
    

?>
    
</body>
</html>