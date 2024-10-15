<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>

<?php

$colorin = 'rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).')';

?>

<style> 

.dot {

    height: 25px;
    width:  25px;
    border-radius: 50%;
    display: inline-block;

    <?php

echo "background-color: $colorin;"

?>

}

</style>

<?php

echo "Actualize la página para cambiar el tamaño y el color del circulo";

echo "<span class='dot'></span>";

?>

</body>
</html>