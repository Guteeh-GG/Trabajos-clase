<!-- En esta página para comprobar el campo de apellido del formulario, repetiremos lo mismo que hicimos con el nombre, ya que el proceso es similar -->
 
<?php
session_start();

if (empty($_POST['apellido'])){
    header("Location:solicitar_apellido.php?error=1"); 
    exit();
}else{
    $_SESSION['apellido'] = $_POST['apellido'];
    header("Location:R_Ejercicio5.php"); // si todo esta correcto avanzaremos al formulario final, mostrar nombre y apellidos
    exit();
}
?>