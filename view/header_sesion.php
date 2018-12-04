<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cinepolis | Panel</title>
        <link rel="icon" type="image/x-icon" href="https://static.cinepolis.com/favicon.ico" />
        <link rel="stylesheet" href="view/assets/css/normalize.min.css">
        <link rel="stylesheet" href="view/assets/css/panel-administrativo.css">
        <link rel="stylesheet" href="view/assets/css/login.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>

  
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="panel-administrativo.php">
    <img src="https://static.cinepolis.com/img/lg-cinepolis.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Cinepolis
  </a>  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="panel-administrativo.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          General
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

          <a class="dropdown-item" href="panel-usuarios.php">Usuarios</a>
          <a class="dropdown-item" href="panel-peliculas.php">Película</a>
          <a class="dropdown-item" href="panel-sucursales.php">Sucursal</a>
          <a class="dropdown-item" href="panel-combo.php">Combo</a>
          <a class="dropdown-item" href="panel-productos.php">Producto</a>
          <a class="dropdown-item" href="panel-funcion.php">Función</a>
          <a class="dropdown-item" href="panel-clasif.php">Clasificación</a>
          <a class="dropdown-item" href="panel-eventos.php">Evento</a>
        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Venta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="panel-boleto.php">Vender Boleto</a>
          <a class="dropdown-item" href="panel-dulceria.php">Dulceria</a>
          <a class="dropdown-item" href="panel-inventario.php">Ver inventario</a>
          <a class="dropdown-item" href="panel-cartelera.php">Ver cartelera</a>
     
        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Perfil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="usuario-nuevo.php?type=view&id=<?php if(!empty($_SESSION['usuario']['id_usuario'])){echo $_SESSION['usuario']['id_usuario']; } ?>">Editar perfil</a>
          <a class="dropdown-item" href="cerrar.php">Cerrar session</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="content m-4">





