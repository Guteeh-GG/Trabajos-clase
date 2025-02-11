<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    
<!-- Escriba un programa que dibuje un cuadrado que conste de dos páginas.
● En la primera página se solicitan el tamaño del cuadrado en píxeles.
● En la segunda página se muestra el cuadrado negro. -->

<h1>Dibujar un cuadrado con formularios</h1>

<form action = "R_Ejercicio2.php" method="get">
    <label>Escribe las medidas del cuadrado</label>
    <input type ="text" name="tamanio">
</br>
<button type="submit">Enviar</button>
<button type="reset">Borrar</button>
</form>

</body>
</html>