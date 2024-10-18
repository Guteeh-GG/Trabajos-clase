<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
        ?>
    </div>

    <div class="dado2">
        <p>Jugador 2</p>
        <?php
            $Dado3 = rand(1, 6);
            echo "<img src='../EJERCICIOS 0/Dado{$Dado3}.webp'>";
            $Dado4 = rand(1, 6);
            echo "<img src='../EJERCICIOS 0/Dado{$Dado4}.webp'>";
        ?>
    </div>

</div>

<div>Resultado
    <?php

    $Sumaj1 = $Dado + $Dado2;
    $Sumaj2 = $Dado3 + $Dado4;
    $MasAlto = max ($Sumaj1, $Sumaj2);

    if ( $Dado == $Dado2){

    }else if ($Dado3 !== $Dado4){

        echo "El ganador es el jugador 1";
    }

    if ($Dado3 == $Dado4){

    } else if ( $Dado !== $Dado2) {
    
    echo "El gandor es el jugador 2";
  
    }

    if ( $Dado == $Dado2){


  }else if ($Dado3 == $Dado4){

  }else if ($Sumaj1 == $Sumaj2){

echo "HAY EMPATE";

  }

if ($Sumaj1 > $Sumaj2){

    echo "Ganador: Jugador 1";

}else{

    echo "Ganador: Jugador 2";
}


    ?>
</div>

</body>
</html>
