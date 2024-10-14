<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    
<?php

$num1 = "7";
echo "el numero 1 es ".gettype($num1).$num1."\n";

$num2 = 5;
echo "el numero 2 es ".gettype($num2).$num2."\n";

$result = intval($num1) / $num2;
echo "el resultado de la división es: ".gettype($result).$result ."\t";

?>

<p>......................................................................................</p>

<?php

$num1 = "Lote: ";
echo "el numero 1 es ".gettype($num1).$num1."\n";

$num2 = 724;
echo "el numero 2 es ".gettype($num2).$num2."\n";

$result = $num1.$num2;
echo "el resultado de la operación es: ".gettype($result).$result ."\t";

?>

</body>
</html>