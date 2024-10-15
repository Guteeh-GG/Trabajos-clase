<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    
<?php

echo "<p>Actuliza la página para ver la línea de diferente tamaño</p>";

$Tamanio = rand(10, 1000);
echo "<hr style= 'width: {$Tamanio}px;'>";

?>

</body>
</html>