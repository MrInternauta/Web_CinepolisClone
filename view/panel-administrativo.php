<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cinepolis | Panel</title>
        <link rel="stylesheet" href="view/assets/css/normalize.min.css">
        <link rel="stylesheet" href="view/assets/css/panel-administrativo.css">
        <link rel="stylesheet" href="view/assets/css/login.css">

    </head>

  
    <body>
        <div class="container">
            <div class="panel-izquierdo">
                <span class="tittle-1">Administración general</span>
                <div class="tabla-interior">
                    <div class="item-tabla"> <a href="panel-usuarios.php">Alta/Baja usuarios</a>    <i class="fas fa-angle-right"></i> </div>
                    <div class="item-tabla"> <a href="panel-peliculas.php">Alta/Baja película</a>   <i class="fas fa-angle-right"></i> </div>
                    <div class="item-tabla"> <a href="panel-sucursales.php">Alta/Baja sucursal</a>  <i class="fas fa-angle-right"></i> </div>
                    <div class="item-tabla"> <a href="panel-combo.php">Alta/Baja combo</a>          <i class="fas fa-angle-right"></i> </div>
                    <div class="item-tabla"> <a href="panel-productos.php">Alta/Baja producto</a>   <i class="fas fa-angle-right"></i> </div>
                    <div class="item-tabla"> <a href="panel-funcion.php">Alta/Baja función</a>      <i class="fas fa-angle-right"></i> </div>
                    <div class="item-tabla"> <a href="panel-clasif.php">Registrar clasificación</a> <i class="fas fa-angle-right"></i> </div>
                    <div class="item-tabla"> <a href="panel-eventos.php">Registrar evento</a>       <i class="fas fa-angle-right"></i> </div>
                </div>
            </div>
            <div class="panel-derecho">
                <span class="tittle-1 cc">Venta</span>
                <div class="tabla-interior">
                    <div class="item-tabla"> <a href="panel-boleto.php">Vender boleto</a>      <i class="fas fa-angle-right"></i> </div>
                    <div class="item-tabla"> <a href="panel-dulceria.php">Ver dulcería</a>     <i class="fas fa-angle-right"></i> </div>
                    <div class="item-tabla"> <a href="panel-inventario.php">Ver inventario</a> <i class="fas fa-angle-right"></i> </div>
                    <div class="item-tabla"> <a href="panel-cartelera.php">Cartelera</a>       <i class="fas fa-angle-right"></i> </div>
                </div>
            </div>
            <div class="panel-izquierdo">
                <span class="tittle-1 cc">Personal</span>
                <div class="tabla-interior">
                    <div class="item-tabla"> <a href="panel-administrativo.php">Editar perfil</a>      <i class="fas fa-angle-right"></i> </div>
                    <div class="item-tabla"> <a href="cerrar.php">Cerrar sesion</a>       <i class="fas fa-angle-right"></i> </div>
                </div>
            </div>
        </div>
        <a href="cerrar.php">Cerrar session</a>
        <script type="text/javascript" src="view/assets/js/fontawesome.js"></script>
    </body>
</html>
