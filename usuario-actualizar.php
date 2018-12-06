<?php
session_start();
require 'function.php';
if(empty($_SESSION['usuario'])   || $_SESSION['usuario']['tipo_user'] != 'empleado' ){
 header('Location: home.php');
}
$conn = conectarabd();
$error = '';

    if(  !empty($_POST['nombre']) &&
         !empty($_POST['apellido']) &&
         !empty($_POST['email']) &&
         !empty($_POST['pass']) &&
         !empty($_POST['nacimiento']) &&
         !empty($_POST['tipo'])  && 
         !empty($_GET['id']) )
        {
           $id_usuario = $_GET['id'];
            $statement = $conn->prepare('CALL EDITAR_USUARIO(:ID_USU, :ID_DIR, :NOM, :APL, :COR,	:CONT, :FECH, :TIP, :IM)');
            $usuario = $statement->execute( array(
                ':ID_USU' => $id_usuario, 
                ':ID_DIR' => $id_direccion, 
                ':NOM' => $nombre, 
                ':APL' => $apellido, 
                ':COR' => $email,	
                ':CONT' => $pass, 
                ':FECH' => $nacimiento, 
                ':TIP' => $tipo, 
                ':IM' => ''
            ) );
            //------
            header('Location: panel-usuarios.php');
    }else{ 
        $error = 'Faltan datos'; 
    }







?>