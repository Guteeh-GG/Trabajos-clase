//Crea una variable de tipo entero con valor 5 y muéstrala en pantalla indicando su
tipo. A continuación asigna a la variable el valor 5.5 y vuelve a mostrarla en pantalla
indicando su tipo, ¿se ha modificado?

<?php

$resultado = 5
$tipo = gettype($resultado);
$tipo = gettype($resultado);
echo "Resultado vale: $resultado y es de tipo $tipo<br>";
$resultado2 = 5.5;
$tipo = gettype($resultado2);
echo "y Resultado2: $resultado2 y es de tipo $tipo<br>";
echo "mientras Resultado vale: $resultado y es de tipo $tipo<br>";

?> 