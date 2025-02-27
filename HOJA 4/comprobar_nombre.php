<?php
session_start();

if (empty($_POST['nombre'])){
    header("Location:Ejercicio5.php?error=1"); //En esta linea trataremos el error de la URL si es =1 es que el campo esta vacío y nos mandará de vuelta al inicio para rellenar el campo 
    //con el mensaje que hemos definido previamente
    exit();
}else{
    $_SESSION['nombre'] = $_POST['nombre'];
    header("Location:solicitar_apellidos.php"); // si todo esta correcto avanzaremos en el formulario
    exit();
}
?>
