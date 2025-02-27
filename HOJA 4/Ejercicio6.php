<?php
session_start();
//Iniciamos las varibales para almacenar los datos del juego
if (!isset($_SESSION['caraA'])) {
    $_SESSION['caraA'] = 0;
    $_SESSION['caraB'] = 0;
    $_SESSION['ultima_cara'] = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio moneda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<!-- Escriba un programa de dos páginas que simule el juego de cara o cruz. Las reglas del juego son las siguientes:
○ Se tira una moneda de dos caras: cara A y cara B
○ Se lleva la cuenta de las veces que ha salido cada resultado.
○ El jugador A es un gato, que muestra las siguientes expresiones: 😸 (entidad numérica &#128568;) si va ganando, 😼(entidad numérica &#128572;) si va empatando y 🙀 (entidad numérica &#128576;) si va perdiendo.
○ El jugador B es un mono, que muestra las siguientes expresiones: 🐵 (entidad numérica &#128053;) si va ganando, 🙊(entidad numérica &#128586;) si va empatando y 🙈 (entidad numérica &#128584;) si va perdiendo.
● La primera página muestra el estado de la partida y contiene dos botones:
○ Uno para lanzar de nuevo la moneda
○ Otro para volver a empezar una nueva partida
● La segunda página recoge el botón, modifica las variables de sesión y redirige a la primera página. Las variables de sesión pueden ser tres:
○ La cara de la moneda que ha salido (A o B).
○ El número de veces que ha salido la cara A.
○ El número de veces que ha salido la cara B. -->

<table style="text-align: center;">
<tr>
<th>Jugador A</th>
<th>Resultado</th>
<th>Jugador B</th>
</tr>
<tr style="font-size: 400%">
<td><?php echo $_SESSION['caraA']; ?></td> <!--Jugador A, que deberemos de introducir php para actualizar sus resultados-->
<td><?php 
if ($_SESSION['ultima_cara'] === 'A'){
    echo '<img src="caraA.png" alt="A" width="100" height="100">';
}else{                                                                          //En estas lineas hemos definido que imagen saldra al lanzar la moneda
    echo '<img src="caraB.png" alt="B" width="100" height="100">';
}
 ?>
 </td> 
<td><?php echo $_SESSION['caraB']; ?></td> <!--Jugador B, que deberemos de introducir php para actualizar sus resultados-->

<?php
// Determinar las expresiones según el resultado
if ($_SESSION['caraA'] > $_SESSION['caraB']) {
    $emojiA = "&#128568;"; // 😸 Gana A
    $emojiB = "&#128584;"; // 🙈 Pierde B
} elseif ($_SESSION['caraA'] < $_SESSION['caraB']) {
    $emojiA = "&#128576;"; // 🙀 Pierde A
    $emojiB = "&#128053;"; // 🐵 Gana B
} else {
    $emojiA = "&#128572;"; // 😼 Empate A
    $emojiB = "&#128586;"; // 🙊 Empate B
}
?>

</tr>
<tr style="font-size: 400%">
<td><?php echo $emojiA ?></td> <!--Emojis que cambian según el resultado, modificar con php (Jugador A)-->
<td></td>
<td><?php echo $emojiB ?></td> <!--Emojis que cambian según el resultado, modificar con php (Jugador B)-->
</tr>
</table>

<!-- Botones para empezar el juego o reiniciarlo -->

<form action="R_Ejercicio6.php" method="post">
    <button type="submit" name="lanzar">Lanzar moneda</button>
    <button type="submit" name="reset">Reiniciar partida</button>
</form>
</body>
</html>