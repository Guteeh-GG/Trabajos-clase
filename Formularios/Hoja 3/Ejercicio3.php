<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h2>Formulario de Pedido</h2>
    <form action="R_Ejercicio3.php" method="post">
        <label for="a">Artículo A (5.99€)</label>
        <input type="number" id="a" name="a" min="0" required><br><br>
        
        <label for="b">Artículo B (12.49€)</label>
        <input type="number" id="b" name="b" min="0" required><br><br>
        
        <label for="c">Artículo C (19.99€)</label>
        <input type="number" id="c" name="c" min="0" required><br><br>
        
        <input type="submit" value="Generar Factura">
    </form>
</body>
</html>