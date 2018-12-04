<?php
session_start();
if(  !empty($_SESSION['usuario']) ){
    if($_SESSION['usuario']['tipo_user'] == 'empleado'){
        header('Location: panel-administrativo.php');
    }
    if($_SESSION['usuario']['tipo_user'] == 'usuario'){
             header('Location: home.php');
    }
    }
    //echo $_SESSION['tipo_user'];

    
    

?>