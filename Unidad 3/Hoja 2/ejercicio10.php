<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Diana con Disparos Aleatorios</title>
    <style>

        .circle {
            border-radius: 50%;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
        }


        .diana {
            position: relative;
            width: 400px;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>
</head>
<body>

<div class="diana">
    <?php
    $numcirculos = 10; 
    $maxtamanio = 300;
    $color1 = 'red'; 
    $color2 = 'white'; 


    for ($i = 0; $i < $numcirculos; $i++) {
        $tamanio = $maxtamanio - $i * ($maxtamanio / $numcirculos);
        $color = ($i % 2 == 0) ? $color1 : $color2; 
        $puntdiana = $numcirculos -$i;
        echo "<div class='circle' style='width: {$tamanio}px; height: {$tamanio}px; background-color: {$color};'>$puntdiana</div>";
    }

    ?>