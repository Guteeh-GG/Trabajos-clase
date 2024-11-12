<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>

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

</style>

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
            $maxdado = max($Dado, $Dado2, $Dado3);
        ?>

<div>

<?php

if ($Dado == $Dado2 && $Dado == $Dado3 && $Dado2 == $Dado3){

echo "Los 3 dados son iguales y el valor es {$Dado}" ;

}else if ($Dado == $Dado2 && $Dado != $Dado3){

    echo "Hay una pareja y el valor es: {$Dado}";

}else if ($Dado == $Dado3 && $Dado != $Dado2){

    echo "Hay una pareja y el valor es: {$Dado3}";

}else if ($Dado2 == $Dado3 && $Dado2 != $Dado){

    echo "Hay una pareja y el valor es: {$Dado2}";

}

?>

<div>

<?php

echo "El valor más alto de los dados es: {$maxdado}";

?>

</div>
</div>
</body>
</html>