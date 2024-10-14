<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>

<?php
    $Mensaje = "Actualiza la página para ver otro resultado";
    echo " $Mensaje ";
  
?>

<div class = "dado">

    <?php
    $Dado = rand(1,6);
    
if ($Dado ==1){

    echo '<img src ="cara-uno.webp">';
}if ($Dado ==2){

    echo '<img src ="cara-dos.webp">';

}if($Dado ==3){

    echo '<img src ="cara-tres.webp">';

}if($Dado ==4){

    echo '<img src ="cara-cuatro.webp">';

}if($Dado ==5){

    echo '<img src ="cara-cinco.webp">';

}if($Dado ==6){

    echo '<img src ="cara-seis.webp">';
    
}
    ?>

 

</div>

</body>
</html>