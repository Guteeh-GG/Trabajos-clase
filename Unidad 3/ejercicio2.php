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
        ?>
    </div>

    <div class="dado2">
        <p>Jugador 2</p>
        <?php
            $Dado2 = rand(1, 6);
            echo "<img src='../EJERCICIOS 0/Dado{$Dado2}.webp'>";
        ?>
    </div>
</div>

<div>Resultado
    <?php
    if ($Dado2 == $Dado) {
        echo "EMPATE!";
    } elseif ($Dado > $Dado2) {
        echo "El ganador es el Jugador 1";
    } else {
        echo "El ganador es el Jugador 2";
    }
    ?>
</div>

</body>
</html>
