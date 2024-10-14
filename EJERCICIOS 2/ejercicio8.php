<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    
<p>

Escribe el valor que tendrán las variables tras ejecutar el siguiente código: <br>


$num1 = 7;<br>
$num2 = 5;<br>
$result = $num1;<br>
$result += $num2++;<br>

<p> </p>

$num1 = 7  <br>
$num2 = 5 <br>
$result = 7+5 = 12 +1 = 13 // suma después de hacer la operación <br>

<p> </p>

$num1 = 7;<br>
$num2 = 5;<br>
$result = &$num1;<br>
$result += ++$num2;<br>

<p> </p>

$num1 = 7 <br>
$num2 =  5 <br>
$result = 7+6 = 13 //suma antes de hacer la operación <br>

<p> </p>

$num1 = 7;<br>
$num2 = 5;<br>
$result = &$num1;<br>
$result += ++$num1;<br>

<p> </p>

$num1 = 7 <br>
$num2 =  5<br>
$result =  7 +7+1 = 15 // suma antes de hacer la operación <br>

</p>

</body>
</html>
