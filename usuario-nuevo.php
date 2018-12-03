<?php
session_start();
require 'function.php';
if(empty($_SESSION['usuario'])   || $_SESSION['usuario']['tipo_user'] != 'empleado' ){
 header('Location: home.php');
}
$conn = conectarabd();
$error = '';
if($_SERVER['REQUEST_METHOD']== 'POST'){
    if(  !empty($_POST['nombre']) &&
         !empty($_POST['apellido']) &&
         !empty($_POST['email']) &&
         !empty($_POST['pass']) &&
         !empty($_POST['nacimiento']) &&
         !empty($_POST['tipo']) &&
         !empty($_POST['municipios']) &&
         !empty($_POST['cp']) &&
         !empty($_POST['colonia']) &&
         !empty($_POST['calle']) &&
         !empty($_POST['num']) &&
         !empty($_POST['sxh']) &&
         !empty($_POST['hs']) &&
         !empty($_POST['contratacion']) &&
         !empty($_POST['puesto'])
    ){




        $nombre = limpiarDatos($_POST['nombre']);
        $apellido = limpiarDatos($_POST['apellido']);
        $email = limpiarDatos($_POST['email']);
        $pass = limpiarDatos($_POST['pass']);
        $nacimiento = limpiarDatos($_POST['nacimiento']);
        $tipo = limpiarDatos($_POST['tipo']);
        $municipios = limpiarDatos($_POST['municipios']);
        $cp = limpiarDatos($_POST['cp']);
        $colonia = limpiarDatos($_POST['colonia']);
        $calle = limpiarDatos($_POST['calle']);
        $num = limpiarDatos($_POST['num']);
        $sxh = limpiarDatos($_POST['sxh']);
        $hs = limpiarDatos($_POST['hs']);
        $contratacion = limpiarDatos($_POST['contratacion']);
        $puesto = limpiarDatos($_POST['puesto']);
        $estado = 'Veracruz';
        $error = 'Aun me falta programar esta parte...';

        
    }else{
        $error = 'Faltan datos';
    }


}
if($_SERVER['REQUEST_METHOD']== 'GET'){

}


require 'view/usuario-nuevo.php';

?>