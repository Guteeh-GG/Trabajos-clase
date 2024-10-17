<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
    
<?php

    $Mensaje = "Actualiza la página para mostrar otra tirada";

    echo " $Mensaje ";
  
?>

    <?php

    $Dado = rand(1,6);

    echo "<img src ='../EJERCICIOS 0/Dado{$Dado}.webp'>";

    echo "<br><br>";

 ?>

<style>

div{

    display: inline-block;
    background-color: peru;
    border: 2px solid black;
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 50px;
}

.dot {

height: 25px;
width:  25px;
border-radius: 100%;
display: inline-block;
background-color: red;

}

</style>



<div>

1 <?php 
if ($Dado == 1) 

echo "<span class='dot'></span>";

?>
</div>

<div>

2 <?php 
if ($Dado == 2) 

echo "<span class='dot'></span>";

?>

</div>

<div>

3 <?php 
if ($Dado == 3) 

echo "<span class='dot'></span>";

?>

</div>

<div>

4 <?php 
if ($Dado == 4) 

echo "<span class='dot'></span>";

?>

</div>

<div>

5 <?php 
if ($Dado == 5) 

echo "<span class='dot'></span>";

?>

</div>

<div>

6 <?php 
if ($Dado == 6) 

echo "<span class='dot'></span>";

?>

</div>

</body>
</html>