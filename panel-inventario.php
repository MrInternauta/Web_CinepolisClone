<?php
session_start();

if(empty($_SESSION['usuario'])   || $_SESSION['usuario']['tipo_user'] != 'empleado' ){
 header('Location: home.php');
}
require('view/admin-inventario.php');

?>