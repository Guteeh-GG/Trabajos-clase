<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio clases</title>
</head>
<body>
<h1>Capitales</h1>

<?php

$capitales = array ("España"=>"Madrid","Francia"=>"Paris",
"Italia"=>"Roma");
print_r ($capitales);
echo "<br/><br/>";

//ahora creamos otro array de capitales, llamado capitales2 con los mismos valores pero cambiando el orden

$capitales2 = array ("Italia"=>"Roma", "España"=>"Madrid",
"Francia"=>"Paris");
print_r ($capitales2);
echo "<br/><br/>";

//comparamos los dos arrays     

if ( $capitales == $capitales2)
{
echo "Son iguales\n";
echo "<br/><br/>";
}
if ($capitales === $capitales2)
{
echo "Son idénticos\n";
}
if ( $capitales != $capitales2)
{
echo "Son diferentes\n";
}
if ($capitales !== $capitales2)
{
echo "No son idénticos\n";
}

?>

</body>
</html>