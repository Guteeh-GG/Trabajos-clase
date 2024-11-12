<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio17</title>
</head>
<body>

<svg class= "circulo" width="100" height="100">

<circle cx="50" cy="50" r="40" stroke-width="4" fill="red"/>

</svg>

<svg class= "circulo2" width="100" height="100">

<circle cx="50" cy="50" r="40" stroke-width="4" fill="blue"/>

</svg>

<svg class= "circulo3" width="100" height="100">

<circle cx="50" cy="50" r="40" stroke-width="4" fill="green"/>

</svg>

<?php

$colorin = 'rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).')';

$colorin2 = 'rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).')';

$colorin3 = 'rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).')';

?>

<style> 

.circulo {

    height: 100px;
    width:  100px;
    border-radius: 100%;
    display: inline-block;

    <?php

echo "background-color: $colorin;"

?>

    }

.circulo2  {

    height: 100px;
    width:  100px;
    border-radius: 100%;
    display: inline-block;
    margin-right: 75px;

    <?php

echo "background-color: $colorin2;"

?>

}

.circulo3  {

    height: 100px;
    width:  100px;
    border-radius: 100%;
    display: inline-block;

    <?php

echo "background-color: $colorin3;"

?>

}

</style>
    

</body>
</html>