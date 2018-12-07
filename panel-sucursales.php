<?php
session_start();
require 'function.php';

if(empty($_SESSION['usuario'])   || $_SESSION['usuario']['tipo_user'] != 'empleado' ){
 header('Location: home.php');
}
$conn= conectarabd();
$pagina = "COMPLEJO";

$statement = obt_tabla(8, $conn, $pagina);

require('view/admin-sucursales.php');

?>