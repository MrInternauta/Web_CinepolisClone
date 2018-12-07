<?php
session_start();

if(!empty($_SESSION['usuario']) ){
    header('Location: panel-administrativo.php');
}
if( $_SERVER['REQUEST_METHOD'] == 'POST')
{
    $error = '';
    if( !empty($_POST['usuario']) && !empty($_POST['pass']) ){
        $pass = $_POST['pass'];
        $user = $_POST['usuario'];
        require 'function.php';
        $conn = conectarabd();
        $statement = $conn->prepare('CALL MOSTRAR_EMPLEADO(:id)');
        $statement->execute( array(
            ':id' => $user        ) );
        $resultados = $statement->fetch();
        if( !$resultados ){
            $error = 'Usuario no encontrado';
        }else{
            if($resultados['contrasenia'] == $_POST['pass']){
                $_SESSION['usuario'] = $resultados;
                echo $_SESSION['usuario']['contrasenia'];
                header('Location: profile.php');
            }else{
                $error = 'Error al iniciar sesion';
            }
        
        
    }

    }else{
        $error = 'Ingresa todos los datos';
    }

}

require('view/login.php');
//header('Location: index.php')
?>