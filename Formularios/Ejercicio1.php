<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    
<!-- Escriba un formulario de recogida de datos personales que conste de dos páginas.
● En la primera página se solicita el nombre.
● En la segunda página se muestra el texto introducido por el usuario (aunque esté en blanco). -->

<h1>Formulario de recogida de datos</h1>
<form action="R_Ejercicio1.php" method="get">
    <label>Introduce tu nombre</label>
    <input type="text" name="nombre">
    <br/>
    <button type="submit">Enviar</button>
    <button type="reset">Borrar</button>
</form>  

</body>
</html>