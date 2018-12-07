<?php
require 'function.php';
$conn = conectarabd();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(!empty($_POST['complejo'])){
        echo $_POST['complejo'];

        $id =  $_POST['complejo'];
        $statement = $conn->prepare("SELECT  C.* , F.*, C.*, P.* FROM CARTELERA C, COMPLEJO CO, FUNCION F, PELICULA P WHERE C.id_complejo = CO.id_complejo AND C.id_cartelera  = F.id_cartelera  AND  F.id_pelicula =  P.id_pelicula AND CO.Nombre  = :id");
        $usuario = $statement->execute( array(
            ':id' => $id
        ));
        $usuario = $statement->fetch();
        print_r($usuario);
        header('Location: asientos.php');
    }

}


//echo $resultados['id_complejo'];
include('view/cartelera.php');
?>