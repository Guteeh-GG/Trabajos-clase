 <!-- Necesitaremos este codigo en el inicio del documento para guardar la sesion y recordar lo que se introduzca, 
 lo mismo pasara en el documento en el que traten los datos -->
 
 <?php
session_start();
$ultimoTexto = isset($_SESSION["texto"]) ? $_SESSION["texto"] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    
<!-- Escriba un programa de dos páginas que solicite un texto al usuario y lo muestre en las
dos páginas.
● En la primera página, se solicita un texto del usuario.
● En la segunda página, se dice si se ha escrito o no texto en el formulario. Se pueden escribir letras o números, una o varias palabras.
● Al volver a la primera página, se mostrará el último texto escrito. -->


<p><?php echo $ultimoTexto; ?></p>

<form action="R_Ejercicio2.php" method="post">
    <label for="txt">Escriba texto:</label>
    <input type="text" id="txt" name="texto" value="<?php echo htmlspecialchars($ultimoTexto); ?>" />

    <br><br>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">

</body>
</html>