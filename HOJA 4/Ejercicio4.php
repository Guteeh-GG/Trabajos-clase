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
    <title>Ejercicio 4</title>
</head>
<body>
    
<!-- Escriba un programa de dos páginas que muestre un punto sobre una línea y permita
moverlo a derecha o izquierda mediante dos botones.
● La primera página contiene un formulario con tres botones de tipo submit con el mismo atributo name.
● La segunda página recibe el dato, modifica la variable que contiene la posición y redirige a la primera página.
● El número se guarda en una variable de sesión. Si la variable no está definida, se le dará el valor 0.
● El ancho de la línea son 600px y las coordenadas van de -300 a 300.
● El punto avanza o retrocede de 20px en 20px.
● Cuando el punto sale del dibujo por un lado, aparece en el lado opuesto. -->

<form action="R_Ejercicio4.php" method="post">
<p>
        <button type="submit" name="accion" value="izquierda" style="font-size: 4rem">(Imagen mano izquierda)</button>

        <button type="submit" name="accion" value="derecha" style="font-size: 4rem">(Imagen mano derecha)</button>

                <!-- Incluimos aqui la sesion de contador para que cada vez que se actualice veamos el cambio -->

                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
        width="600" height="20" viewbox="-300 0 600 20">
        <line x1="-300" y1="10" x2="300" y2="10" stroke="black"
        stroke-width="5" />
        <circle cx="<?php echo $_SESSION['contador']; ?>" cy="10" r="8" fill="red" />
                </svg>
</p>
</form>

</body>
</html> 