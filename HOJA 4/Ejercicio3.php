<?php
session_start();
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    
<!-- Escriba un programa de dos páginas que muestre un valor numérico y permita subirlo o
bajarlo mediante dos botones.
● La primera página contiene un formulario con tres botones de tipo submit con el mismo name.
● La segunda página recibe el dato, modifica el número y redirige a la primera página.
● El número se guarda en una variable de sesión. Si la variable no está definida, se le dará el valor 0. -->

<form action="R_Ejercicio3.php" method="post">
<p>
        <button type="submit" name="accion" value="bajar" style="font-size: 4rem">-</button>
        <!-- Incluimos aqui la sesion de contador para que cada vez que se actualice veamos el cambio -->
        <span style="font-size: 4rem"><?php echo $_SESSION['contador']; ?></span> 
        <button type="submit" name="accion" value="subir" style="font-size: 4rem">+</button>
</p>
</form>

</body>
</html>