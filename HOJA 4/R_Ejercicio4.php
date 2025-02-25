<?php
session_start();

// Verificamos si la variable de sesión 'contador' está definida, si no, la inicializamos en 0
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

// Definimos el incremento/decremento y los límites de la línea
$paso = 20;
$limite_izquierdo = -300;
$limite_derecho = 300;

// Verificamos qué botón se ha presionado
if (isset($_POST['accion'])) {
    if ($_POST['accion'] == 'izquierda') {
        $_SESSION['contador'] -= $paso;
    } elseif ($_POST['accion'] == 'derecha') {
        $_SESSION['contador'] += $paso;
    }
}

// Si el punto sobrepasa los límites, reaparece en el lado opuesto
if ($_SESSION['contador'] < $limite_izquierdo) {
    $_SESSION['contador'] = $limite_derecho;
} elseif ($_SESSION['contador'] > $limite_derecho) {
    $_SESSION['contador'] = $limite_izquierdo;
}

// Redirigimos de nuevo a la página principal
header("Location: Ejercicio4.php");
exit();
