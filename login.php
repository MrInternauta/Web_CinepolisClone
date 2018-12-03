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
        $statement = $conn->prepare('SELECT * FROM usuario WHERE id_usuario = :id AND contrasenia = :pass');
        $statement->execute( array(
            'id' => $user,
            ':pass' => $pass
        ) );
        $resultados = $statement->fetch();
        if( empty($resultados) ){
            $error = 'Usuario no encontrado';

        }else{
        $_SESSION['usuario'] = $resultados;
        header('Location: profile.php');
    }

    }else{
        $error = 'Ingresa todos los datos';
    }

}

require('view/login.php');
//header('Location: index.php')
?>