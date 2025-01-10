<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
$alumnos = array('Ana', 'Juan', 'Pedro');
foreach ($alumnos as $alumno) {
    echo $alumno. '<br>'; //si pongo "\n" me lo pone en linea en vez de con intro 
}

/*for ($i = 0; $i < count($alumnos); $i++) {
    echo $alumnos[$i] . "\n";
}*/ //ES OTRA FORMA DE ITERAR DENTRO DENTRO DEL ARRAY

?> 
</body>
</html>