<?php
session_start();
require 'function.php';

if(empty($_SESSION['usuario'])   || $_SESSION['usuario']['tipo_user'] != 'empleado' ){
 header('Location: home.php');
}
$conn= conectarabd();
$pagina= "PELICULA";
//$regis= $conn->query("SELECT * FROM PELICULAS")->fetchAll(PDO::FETCH_OBJ);

//foreach ($regis as $pelis ): 
$statement = obt_tabla(11, $conn, $pagina);

require('view/admin-peliculas.php');

?>