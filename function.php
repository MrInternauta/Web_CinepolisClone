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

# Funcion para limpiar y convertir datos como espacios en blanco, barras y caracteres especiales en entidades HTML.
# Return: los datos limpios y convertidos en entidades HTML.
function limpiarDatos($datos){
	// Eliminamos los espacios en blanco al inicio y final de la cadena
	$datos = trim($datos);

	// Quitamos las barras / escapandolas con comillas
	$datos = stripslashes($datos);

	// Convertimos caracteres especiales en entidades HTML (&, "", '', <, >)
	$datos = htmlspecialchars($datos);
	return $datos;
}

# Funcion para obtener la pagina actual
# Return: El numero de la pagina si esta seteado, sino entonces retorna 1.
function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p']: 1; 
}


# Funcion para obtener los post determinando cuantos queremos traer por pagina.
# Return: Los post dependiendo de la pagina que estemos y cuantos post por pagina establecimos.
function obtener_usuarios($tipo ,$usuarios_por_pagina, $conexion){
	//1.- Obtenemos la pagina actual
	// $pagina_actual = isset($_GET['p']) ? (int)$_GET['p']: 1;
	// Para reutilizar el codigo creamos una funcion que nos dice la pagina actual.

	//2.- Determinamos desde que post se mostrara en pantalla
	$inicio = (pagina_actual() > 1) ? (pagina_actual() * $usuarios_por_pagina - $usuarios_por_pagina) : 0;

	//3.- Preparamos nuestra consulta trayendo la informacion e indicandole desde donde y cuantas filas.
	// Ademas le pedimos que nos cuente cuantas filas tenemos.
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM {$tipo} LIMIT {$inicio}, {$usuarios_por_pagina}");

	$sentencia->execute();
	return $sentencia->fetchAll();
}

# Funcion para calcular el numero de paginas que tendra la paginacion.
# Return: El numero de paginas
function numero_paginas($post_por_pagina, $conexion){
	//4.- Calculamos el numero de filas / articulos que nos devuelve nuestra consulta
	$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_post->execute();
	$total_post = $total_post->fetch()['total'];

	//5. Calculamos el numero de paginas que habra en la paginacion
	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}

function total_registros($de, $conexion){
	$total_post = $conexion->prepare("SELECT count(*) FROM {$de} as total");
	$total_post->execute();
	$val = $total_post->fetch();
	return ($val[0]);
}

function call_Select($tipo, $conexion ){
	$total_post = $conexion->prepare("CALL {$tipo}");
	$total_post->execute();
	return $total_post->fetch()['total'];

}

function obt_tabla($num_registro, $conexion, $pag){
	//1.- Obtenemos la pagina actual
	// $pagina_actual = isset($_GET['p']) ? (int)$_GET['p']: 1;
	// Para reutilizar el codigo creamos una funcion que nos dice la pagina actual.

	//2.- Determinamos desde que post se mostrara en pantalla
	$inicio = (pagina_actual() > 1) ? (pagina_actual() * $num_registro - $num_registro) : 0;

	//3.- Preparamos nuestra consulta trayendo la informacion e indicandole desde donde y cuantas filas.
	// Ademas le pedimos que nos cuente cuantas filas tenemos.
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM {$pag} LIMIT {$inicio}, {$num_registro}");

	$sentencia->execute();
	return $sentencia->fetchAll();
}




?>





?>
