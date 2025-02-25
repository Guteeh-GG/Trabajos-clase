<?php
session_start();

// Si la variable de sesión no existe, inicializarla en 0
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

// Verificar si se ha enviado el formulario
if (isset($_POST['accion'])) {
    if ($_POST['accion'] == 'subir') {
        $_SESSION['contador']++;
    } elseif ($_POST['accion'] == 'bajar') {
        $_SESSION['contador']--;
    }
}

// Redirigir de vuelta a index.php
header("Location: Ejercicio3.php");
exit();
