<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
</head>
<body>

<h2>Factura</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = isset($_POST['a']) ? intval($_POST['a']) : 0;
    $b = isset($_POST['b']) ? intval($_POST['b']) : 0;
    $c = isset($_POST['c']) ? intval($_POST['c']) : 0;

    $precioA = 5.99;
    $precioB = 12.49;
    $precioC = 19.99;

    $subtotalA = $a * $precioA;
    $subtotalB = $b * $precioB;
    $subtotalC = $c * $precioC;
    $total = $subtotalA + $subtotalB + $subtotalC;
    $iva = $total * 0.20;
    $totalConIVA = $total + $iva;

    $fecha = date("d-m-Y");
?>

<table border="1">
    <tr>
        <th>Artículo</th>
        <th>Unidades</th>
        <th>Precio Unitario</th>
        <th>Subtotal</th>
    </tr>
    <tr>
        <td>Artículo A</td>
        <td><?php echo $a; ?></td>
        <td><?php echo number_format($precioA, 2); ?>€</td>
        <td><?php echo number_format($subtotalA, 2); ?>€</td>
    </tr>
    <tr>
        <td>Artículo B</td>
        <td><?php echo $b; ?></td>
        <td><?php echo number_format($precioB, 2); ?>€</td>
        <td><?php echo number_format($subtotalB, 2); ?>€</td>
    </tr>
    <tr>
        <td>Artículo C</td>
        <td><?php echo $c; ?></td>
        <td><?php echo number_format($precioC, 2); ?>€</td>
        <td><?php echo number_format($subtotalC, 2); ?>€</td>
    </tr>
    <tr>
        <td colspan="3"><strong>Total sin IVA</strong></td>
        <td><?php echo number_format($total, 2); ?>€</td>
    </tr>
    <tr>
        <td colspan="3"><strong>IVA (20%)</strong></td>
        <td><?php echo number_format($iva, 2); ?>€</td>
    </tr>
    <tr>
        <td colspan="3"><strong>Total con IVA</strong></td>
        <td><?php echo number_format($totalConIVA, 2); ?>€</td>
    </tr>
</table>

<p><strong>Fecha de emisión:</strong> <?php echo $fecha; ?></p>

<?php
} else {
    echo "<p>No se han recibido datos.</p>";
}
?>
<a href="./Ejercicio2.php">Volver a la página anterior</a>
</body>
</html>
