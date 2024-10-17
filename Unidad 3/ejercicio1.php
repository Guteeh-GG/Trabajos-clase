<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

<?php

    $Mensaje = "Actualiza la página para ver otro resultado";
    echo " $Mensaje ";
  
?>

<div class = "dado">

    <?php
    $Dado = rand(1,6);
    $Dado2 = rand(1,6);

    echo "<img src ='../EJERCICIOS 0/Dado{$Dado}.webp'>";
    echo "<img src ='../EJERCICIOS 0/Dado{$Dado2}.webp'>";

    if ($Dado == $Dado2){

    echo "<br> Han salido pareja";

}else{

echo "<br> No han salido parejas";

}

    $Maxdado = max($Dado, $Dado2);

    echo "<br> el valor más alto es $Maxdado";

    ?>
    
</body>
</html>