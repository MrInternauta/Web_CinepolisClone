<?php
session_start();
require 'function.php';
$conn = conectarabd();
if(empty($_SESSION['usuario'])   || $_SESSION['usuario']['tipo_user'] != 'empleado' ){
 header('Location: home.php');
}
$select = $conn->prepare("SELECT C.*, CA.* FROM COMPLEJO C, CARTELERA CA WHERE C.id_complejo = CA.id_complejo AND  C.id_complejo = :id_complejo");
$resp = $select->execute(array(
        'id_complejo'=>$_SESSION['usuario']['id_complejo'] //17
));
$complejo = $select->fetch();
var_dump($complejo);


$select = $conn->prepare("SELECT * FROM FUNCION WHERE id_cartelera = :id_cartelera");
$resp = $select->execute(array(
        'id_cartelera'=>$complejo['id_cartelera']
));
$funciones = $select->fetch();


print_r($funciones);

require('view/admin-boleto.php');

?>