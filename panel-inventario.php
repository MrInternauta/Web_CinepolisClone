<?php
session_start();
require 'function.php';
$conn = conectarabd();
if(empty($_SESSION['usuario'])   || $_SESSION['usuario']['tipo_user'] != 'empleado' ){
 header('Location: home.php');
}
$select = $conn->prepare("SELECT C.*, D.* FROM COMPLEJO C, DIRECCION D  WHERE C.id_direccion = D.id_direccion AND  C.id_complejo = :id_complejo");
$resp = $select->execute(array(
        'id_complejo'=>$_SESSION['usuario']['id_complejo'] //17
));
$complejo = $select->fetch();
//echo "COMPLEJO";
//var_dump($complejo);


$select = $conn->prepare("SELECT * FROM DULCERIA WHERE id_complejo = :id_complejo");
$resp = $select->execute(array(
        'id_complejo'=>$complejo['id_complejo']
));
$dulceria = $select->fetchAll();

//echo "DULCERIA";
//print_r($dulceria);


$select = $conn->prepare("SELECT D.*, I.* FROM DULCERIA D, INGRESO I WHERE D.id_dulceria = I.id_dulceria AND D.id_complejo = :id_complejo");
$resp = $select->execute(array(
        'id_complejo'=>$complejo['id_complejo']
));
$funciones = $select->fetchAll();
//echo "DULCERIA- INGRESO";
//print_r($funciones);


$select = $conn->prepare("SELECT  A.*, DET.cantidad as stock FROM DET_INGRESO DET, ARTICULO A WHERE A.id_articulo = DET.id_articulo and  id_ingreso = :id_ingreso");
$resp = $select->execute(array(
        'id_ingreso' => $funciones[1]['id_ingreso']  
));
$statement = $select->fetchAll();
//print_r($statement);


require('view/admin-inventario.php');

?>