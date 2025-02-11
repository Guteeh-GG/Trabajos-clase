<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Recibidos</title>
</head>
<body>
    <h2>Datos Recibidos</h2>
    <table border="1">
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo htmlspecialchars($_POST['nombre']); ?></td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td><?php echo htmlspecialchars($_POST['apellidos']); ?></td>
        </tr>
        <tr>
            <td>Dirección</td>
            <td><?php echo htmlspecialchars($_POST['direccion']); ?></td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td><?php echo htmlspecialchars($_POST['telefono']); ?></td>
        </tr>
    </table>
</body>
</html>
