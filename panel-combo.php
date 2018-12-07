<?php
session_start();
require 'function.php';

if(empty($_SESSION['usuario'])   || $_SESSION['usuario']['tipo_user'] != 'empleado' ){
 header('Location: home.php');
}
$conn = conectarabd();
$pag= 'COMBO';

$statement= obt_tabla(5,$conn,$pag);


require('view/admin-combo.php');

?>