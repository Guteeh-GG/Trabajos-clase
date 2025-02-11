<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

<!-- Escriba un programa que dibuje un cuadrado que conste de dos páginas.
● En la primera página se solicitan el tamaño del cuadrado en píxeles y el grosor del
borde en píxeles.
● En la segunda página se muestra el cuadrado (relleno de blanco y con borde negro). -->

<h1>Recoger datos cuadrado y bordes</h1>
<form action ="R_Ejercicio3.php" method="get">
    <label>Introduce los lados del cuadrado en px</label>
    <input type="text" name="tamanio">
    <label>Introduce el tamaño del borde px</label>
    <input type="text" name="borde">
    <button type="submit">Enviar</button>
    <button type="reset">Borrar</button>
</form>

</body>
</html>