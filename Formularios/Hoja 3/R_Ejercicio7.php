<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = isset($_POST['cantidad']) ? intval($_POST['cantidad']) : 1;
    $funcion = isset($_POST['funcion']) ? $_POST['funcion'] : 'min';

    if ($cantidad < 1) {
        echo "La cantidad de valores debe ser mayor a 0.";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Valores</title>
</head>
<body>
    <h2>Ingrese los valores</h2>
    <form action="calcular.php" method="post">
        <?php
        for ($i = 0; $i < $cantidad; $i++) {
            echo "<label for='valor$i'>Valor " . ($i + 1) . ":</label>";
            echo "<input type='number' name='valores[]' required step='any'><br><br>";
        }
        ?>
        <input type="hidden" name="funcion" value="<?php echo htmlspecialchars($funcion); ?>">
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
<?php
} 
?>
