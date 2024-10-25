<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>

    <style>

body {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.dado {
    background-color: blue;
    padding: 20px;
    border-radius: 10px;
    margin-right: 20px;
    text-align:center;
    font-size: 25px;
}

.dado2 {
    background-color: red;
    padding: 20px;
    border-radius: 10px;
    margin-right: 20px;
    text-align:center;
    font-size: 25px;
}

</style>

</head>

<body>
    
<?php
        $Mensaje = "Actualiza la página para ver otro resultado";
        echo $Mensaje;
    ?>

    <div class="container">
        <div class="dado">
            <p>Jugador 1</p>
            <?php
                $Dado = rand(1, 6);
                echo "<img src='../EJERCICIOS 0/Dado{$Dado}.webp'>";
                $Dado2 = rand(1, 6);
                echo "<img src='../EJERCICIOS 0/Dado{$Dado2}.webp'>";
                $Dado3 = rand(1, 6);
                echo "<img src='../EJERCICIOS 0/Dado{$Dado3}.webp'>";
            ?>
    </div>
    <div class="dado2">
        <p>Jugador 2</p>
        <?php
            $Dado4 = rand(1, 6);
            echo "<img src='../EJERCICIOS 0/Dado{$Dado4}.webp'>";
            $Dado5 = rand(1, 6);
            echo "<img src='../EJERCICIOS 0/Dado{$Dado5}.webp'>";
            $Dado6 = rand(1, 6);
            echo "<img src='../EJERCICIOS 0/Dado{$Dado6}.webp'>";
        ?>
    </div>
</div>

<div>Resultado
    <?php

$MasAlto = max($Dado,$Dado2,$Dado3);
$MasAlto2 = max($Dado4,$Dado5,$Dado6);

if ($Dado == $Dado2 && $Dado == $Dado3 && $Dado2 == $Dado3){

}else if ($Dado4 == $Dado5 && $Dado4 == $Dado6 && $Dado5 == $Dado6){

}else if ($MasAlto > %$MasAlto2){

echo "Ganador jugador 1";

}else{

echo "Ganador jugador 2";

}

    ?>

</body>
</html>