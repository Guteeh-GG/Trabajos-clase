<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>

<h2>Formulario de información</h2>
<form action="R_Ejercicio6.php" method="post">

    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" required />

    <label for="apellidos">Apellidos</label>
    <input type="text" id="apellidos" name="apellidos" required />

    <label for="tlfn">Teléfono</label>
    <input type="tel" id="tlfn" name="tlfn" required />

    <label for="direccion">Dirección</label>
    <input type="text" id="direccion" name="direccion" required />

    <label for="poblacion">Población</label>
    <input type="text" id="poblacion" name="poblacion" required />

    <label for="provincia">Provincia</label>
    <input type="text" id="provincia" name="provincia" required />

    <label for="nacimiento">Fecha de nacimiento</label>
    <input type="date" id="nacimiento" name="nacimiento" required />

    <label for="estudios">Estudios</label>
    <select name="estudios" id="estudios" required>
        <option value="" selected>Seleccione sus estudios</option>
        <option value="ESO">ESO</option>
        <option value="BACH">Bachiller</option>
        <option value="CF">Ciclo Formativo</option>
    </select>

    <br><br>
    <button type="submit">Enviar</button>

</form>

</body>
</html>
