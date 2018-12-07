<?php
require 'function.php';

$conn = conectarabd();
$statement = obtener_usuarios( 'COMPLEJO',15, $conn);



//echo $resultados['id_complejo'];
include('view/home.php');
?>