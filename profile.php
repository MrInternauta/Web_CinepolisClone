<?php
session_start();
if(  !empty($_SESSION['usuario']) ){
    if($_SESSION['usuario']['tipo_user'] == 'empleado'){
        header('Location: empleado/index.php');
    }
    if($_SESSION['usuario']['tipo_user'] == 'usuario'){
            header('Location: cliente/index.php');
    }
    //echo $_SESSION['tipo_user'];
}
    
    

?>