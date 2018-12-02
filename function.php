<?php

function conectarabd(){
    $host = 'localhost';
    $dbname = 'CINEPOLIS';
    $userdb = 'root';
    $pass = '';
    try{
        $conn =  new PDO("mysql:host=$host;dbname=$dbname", $userdb, $pass);
        return $conn;
    }catch(PDOExeption $e){
        echo 'Error en la conexion: '. $e->getMessage(); 
    }
}


?>
