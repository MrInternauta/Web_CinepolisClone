<?php

function conectarabd(){
    $host = 'localhost';
    $dbname = 'id8098282_cinepolis';
    $userdb = 'id8098282_root';
    $pass = 'cinepolis@root';
    try{
        $conn =  new PDO("mysql:host=$host;dbname=$dbname", $userdb, $pass);
        return $conn;
    }catch(PDOExeption $e){
        echo 'Error en la conexion: '. $e->getMessage(); 
    }
}


?>
