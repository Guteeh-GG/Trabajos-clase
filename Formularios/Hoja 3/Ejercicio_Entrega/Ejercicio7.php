
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    
<!-- Vamos a realizar una aplicación que nos va a permitir calcular las funciones
estadísticas básicas (mínimo, máximo, suma y media) sobre un conjunto de valores.
Para ello le pediremos al usuario que introduzca el número de valores que tiene la
muestra y la función a calcular, a continuación solicitaremos que introduzca los
valores de la muestra a través de otro formulario (éste ya con tantos elementos para
recoger valores como se hayan indicado anteriormente) y por último realizaremos el
cálculo indicado sobre los valores y lo mostraremos en pantalla. Utiliza un array para
almacenar los elementos.
 -->

<!-- Realizamos un formulario para pedir los datos al usuario y lo vinculamos a la siguiente hoja para procesar los datos introducidos -->

 <h2>Funciones</h2>
 <form action="R_Ejercicio7.php" method="post">
 <label for="cantidad">Cantidad de valores:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" required><br><br>
        <label for="funcion">Seleccione la función:</label>
        <select id="funcion" name="funcion" required>
            <option value="min">Mínimo</option>
            <option value="max">Máximo</option>
            <option value="suma">Suma</option>
            <option value="media">Media</option>
        </select><br><br>
        <button type="submit">Siguiente</button>
</form>
</body>
</html>