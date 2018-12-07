<?php
session_start();
require 'function.php';
if(empty($_SESSION['usuario'])   || $_SESSION['usuario']['tipo_user'] != 'empleado' ){
 header('Location: home.php');
}
$conn = conectarabd();

$statement = obtener_usuarios( 'USUARIO',5, $conn);
require 'view/admin-usuarios.php';

?>