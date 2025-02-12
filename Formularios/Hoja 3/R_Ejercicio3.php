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

    //Operacion para comprobar si tiene descuento en funcion de los pedidos

    $totalProductos = $a + $b +$c;
    $descuento=0;
    if ($totalProductos > 20){
        $descuento = 25;
    }else if ($totalProductos >10){
        $descuento = 10;
    }elseif ($totalProductos > 5){
        $descuento = 5;
    }
    
        
    $descuentoAplicado = ($total * $descuento) /100;
    $TotalFinal = $total - $descuentoAplicado;
    $iva = $TotalFinal * 0.20;
    $totalConIVA = $TotalFinal + $iva;


    
    $fecha = date("d-m-Y");
?>

<table border="1">
    <tr>
        <th>Artículo</th>
        <th>Unidades</th>
        <th>Precio Unitario</th>
        <th>Descuento</th>
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
        <td colspan="3"><strong>Descuento</strong></td>
        <td><?php echo $descuento ?>%</td>
    </tr>
    <tr>
        <td colspan="3"><strong>Precio con descuento</strong></td>
        <td><?php echo $TotalFinal ?>%</td>
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
<a href="./Ejercicio3.php">Volver a la página anterior</a>
</body>
</html>
