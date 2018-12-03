<?php
session_start();
require 'function.php';
if(empty($_SESSION['usuario'])   || $_SESSION['usuario']['tipo_user'] != 'empleado' ){
 header('Location: home.php');
}
$conn = conectarabd();
if($_SERVER['REQUEST_METHOD']== "GET"){
    $error="";
    if(!empty($_POST['type']) && !empty($_POST['id'])){
        $tipo = limpiarDatos($_POST['type']);
        $id = limpiarDatos($_POST['id']);
        switch ($tipo) {
            case 'view':
                # code...
                break;

            case 'update':
                # code...
                break;

            case 'delete':
                # code...
                break;
            
            default:
                $error = 'Error: Acción no encontrada';
                break;
        }
    }
}


$statement = obtener_usuarios(5, $conn);
require 'view/admin-usuarios.php';

?>