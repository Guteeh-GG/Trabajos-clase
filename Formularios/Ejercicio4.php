<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta value="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    
<!-- Escriba un programa que muestre la fruta favorita y que conste de dos páginas.
● En la primera página se pide elegir la fruta favorita mediante un botón radio.
● En la segunda página muestra el dibujo de la fruta. -->

<h1>Recoger datos y elegir frutas</h1>
<form action="R_Ejercicio4.php" method="get">
    <label>Indique su fruta favorita</label></br>
    <input type="radio" value="cereza" name="fruta"> 
    <label>cereza</label></br>
    <input type="radio" value="fresa" name="fruta"> 
    <label>fresa</label></br>
    <input type="radio" value="limon" name="fruta"> 
    <label>limon</label></br>
    <input type="radio" value="manzana" name="fruta"> 
    <label>manzana</label></br>
    <input type="radio" value="naranaja" name="fruta"> 
    <label>naranaja</label></br>
    <input type="radio" value="pera" name="fruta"> 
    <label>pera</label></br></br>
        <button type="submit">Enviar</button>
        <button type="reset">Borrar</button>
</form>
</body>
</html>