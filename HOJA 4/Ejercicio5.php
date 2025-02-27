<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    
<!-- Escriba dos formularios encadenados que soliciten el nombre y los apellidos del
usuario.
● En la primera página, se solicita el nombre del usuario.
● En la segunda página se comprueba el nombre del usuario:
○ Si no se ha escrito nada, se vuelve a la primera página, mostrando un aviso.
○ Si se ha escrito algo, se pasa a la tercera página.
● En la tercera página se solicitan los apellidos del usuario.
● En la cuarta página se comprueban los apellidos del usuario:
○ Si no se ha escrito nada, se vuelve a la tercera página, mostrando un aviso.
○ Si se ha escrito algo, se pasa a la quinta página.
● La quinta página muestra el nombre y los apellidos introducidos. -->

<!-- Con esta línea lo que hacemos es definir el error de campo vacio, si se dejara el campo vacio saldria un 1 en la URL de la pagina, que luego en la siguiente pagina de proceso de datos
 podemos tratarlo mas facilmente -->

<?php

if (isset($_GET['error']) && $_GET['error'] == 1){
    echo "<p style = 'color:red;'>El campo de nombre no puede estar vacío</p>";
} 

?>

<h2>Solicitar nombre</h2>

<form action="comprobar_nombre.php" method="post">
    <label for="txt">Inserte su nombre:</label>
    <input type="text" id="nombre" name="nombre" />
    <br><br>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
</form>
</body>
</html>