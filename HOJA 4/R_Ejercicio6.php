<?php
session_start();

if (isset($_POST['reset'])){
//Para reiniciar la partida volveremos a poner todas nuestras variables en 0
    $_SESSION['caraA'] = 0;
    $_SESSION['caraB'] = 0;
    $_SESSION['ultima_cara'] = null; //Se pone en null para que al iniciar sesion no coja resultados anteiores

}else if (isset($_POST['lanzar'])){

    $resultado=rand(0,1) ? 'A' : 'B'; //Operador ternario para el resultado de la moneda, si sale A (cara) o B (cruz)
    $_SESSION['ultima_cara'] = $resultado;

    if ($resultado == 'A'){
        $_SESSION['caraA'] ++;
    }else{
        $_SESSION['caraB']++;
    }

}

header("Location:ejercicio6.php");
exit();
?>