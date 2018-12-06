<?php
session_start();
require 'function.php';
if(empty($_SESSION['usuario'])   || $_SESSION['usuario']['tipo_user'] != 'empleado' ){
 header('Location: home.php');
}
$conn = conectarabd();
$error = '';

if($_SERVER['REQUEST_METHOD']== 'POST'){
    if( 
        !empty($_POST['nombre']) &&
         !empty($_POST['apellido']) &&
         !empty($_POST['email']) &&
         !empty($_POST['pass']) &&
         !empty($_POST['nacimiento']) &&
         !empty($_POST['tipo'])
          ) {

        $nombre =  limpiarDatos($_POST['nombre']);
        $apellido =  limpiarDatos($_POST['apellido']);
        $email =  limpiarDatos($_POST['email']);
        $pass =  limpiarDatos($_POST['pass']);
        $nacimiento =  limpiarDatos($_POST['nacimiento']);
        $tipo =  limpiarDatos($_POST['tipo']);
        //$id_direccion =  limpiarDatos($_POST['id_direccion']);
        $id_direccion = 'D3522';
        
        $total =   total_registros('USUARIO', $conn);
        $id_usuario = (int) $total;
        $id_usuario =  $id_usuario + 1001;
        $id_usuario =   'U'. $id_usuario;
        $statement = $conn->prepare('CALL CREAR_USUARIO(:ID_USU, :ID_DIR, :NOM, :APL, :COR,	:CONT, :FECH, :TIP, :IM)');
            $usuario = $statement->execute( array(
                ':ID_USU' => $id_usuario . '', 
                ':ID_DIR' => $id_direccion, 
                ':NOM' => $nombre, 
                ':APL' => $apellido, 
                ':COR' => $email,	
                ':CONT' => $pass, 
                ':FECH' => $nacimiento, 
                ':TIP' => $tipo, 
                ':IM' => ''
            ) );
     
    }else{
        $error = 'Faltan datos';
    }


}
if($_SERVER['REQUEST_METHOD']== "GET"){
    $error="";
    if(!empty($_GET['type']) && !empty($_GET['id'])){
        $tipo = limpiarDatos($_GET['type']);
        $id = limpiarDatos($_GET['id']);
        switch ($tipo) {
            case 'view':
            $statement = $conn->prepare('CALL MOSTRAR_USUARIO(:id)');
            $usuario = $statement->execute( array(
                ':id' => $id
            ) );
            $usuario = $statement->fetch();

                break;

            case 'delete':
                
            $statement = $conn->prepare('DELETE FROM USUARIO WHERE id_usuario = :id');
            $usuario = $statement->execute( array(
                ':id' => $id
            ) );
            $usuario = $statement->fetch();
            header('Location: panel-usuarios.php');
                break;
            
            default:
                $error = 'Error: Acción no encontrada';
                break;
        }
    }
}


require 'view/usuario-nuevo.php';

?>