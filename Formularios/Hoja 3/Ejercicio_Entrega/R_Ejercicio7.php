<!-- En esta hoja, comprobaremos y procesaremos los datos que el usuario ha introducido
 * empezaremos por cuantos números quiere operar
 * y generaremos celdas de datos acordes a cuantos valores desee introducir -->

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

<!-- A través de un bucle generaremos todas las celdas que necesitemos y recogeremos de la hoja anteior la funcion que previamente haya deseado operar
 * lo ocultaremos, ya que no queremos que el usuario vea esa operación
 * por último mandaremos toda esta información a la siguiente hoja, de calcular. -->

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
