
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
  
         !empty($_POST['titulo']) &&
         !empty($_POST['Presentacion']) &&
         !empty($_POST['stock']) &&
         !empty($_POST['codigo']) &&
         !empty($_POST['precio']) 
          ) {
              //GET DATA
            $titulo =  limpiarDatos($_POST['titulo']);
            $Presentacion =  limpiarDatos($_POST['Presentacion']);
            $stock =  ($_POST['stock']);
            $codigo =  limpiarDatos($_POST['codigo']);
            $precio =  limpiarDatos($_POST['precio']);
            
            
            //realiza update 
            if(!empty($_SESSION['id_producto']) && !empty($_SESSION['id_categoria'])){
                $id_direccion = $_SESSION['id_producto'];
                $id_usuario = $_SESSION['id_categoria'];
                $statement = $conn->prepare('CALL EDITAR_USUARIO(:ID_USU, :ID_DIR, :NOM, :APL, :COR,	:CONT, :FECH, :TIP, :IM)');
            }else{
                $total =   total_registros('USUARIO', $conn);
                $id_usuario = (int) $total;
                $id_usuario =  $id_usuario + 3001;
                $id_usuario =   'U'. $id_usuario;
                $id_direccion = $_POST['id_direccion'];
                $statement = $conn->prepare('CALL CREAR_USUARIO(:ID_USU, :ID_DIR, :NOM, :APL, :COR,	:CONT, :FECH, :TIP, :IM)');
            }
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
            $_SESSION['id_producto'] = null;
            $_SESSION['id_categoria'] = null;
            echo "Listo";
        header('Location: panel-usuarios.php');
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
            $statement = $conn->prepare('SELECT * FROM ARTICULO WHERE id_articulo = :id');
            $usuario = $statement->execute( array(
                ':id' => $id
            ) );
            $usuario = $statement->fetch();
                break;

            case 'delete':
                
            $statement = $conn->prepare('DELETE FROM ARTICULO WHERE id_articulo = :id');
            $usuario = $statement->execute( array(
                ':id' => $id
            ) );
            $usuario = $statement->fetch();
            header('Location: panel-productos.php');
                break;
            
            default:
                $error = 'Error: Acción no encontrada';
                break;
        }
    }
}

require 'view/producto-nuevo.php';

?>