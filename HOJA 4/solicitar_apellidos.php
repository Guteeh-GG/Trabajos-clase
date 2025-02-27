<!-- En esta pagina de formulario se repite casi lo mismo que en la inicial.
 * Iniciaremos sesion para guardar los datos introducidos
 * Y haremos el mismo proceso para almacenar el error del campo de formulario vacio -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar apellidos</title>
</head>
<body>
<?php

if (isset($_GET['error']) && $_GET['error'] == 1){
    echo "<p style = 'color:red;'>El campo de apellido no puede estar vacío</p>";
} 

?>

<h2>Solicitar Apellidos</h2>

<form action="comprobar_apellidos.php" method="post">
    <label for="txt">Inserte su apellido:</label>
    <input type="text" id="apellido" name="apellido" />
    <br><br>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
</form>
</body>
</html>