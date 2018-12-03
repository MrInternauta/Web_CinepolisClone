<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinepolis | Registrar Evento </title>
    <link rel="stylesheet" href="view/assets/css/admin-eventos.css">
     <link rel="stylesheet" href="view/assets/css/login.css">
</head>
<body>
    <header>
        <div>
            <a href="panel-administrativo.php"><i class="fas fa-angle-left"></i></a>
            <img src="view/assets/images/cinepolis-mono.png" height="50px">
            <span>Registrar Evento</span>
        </div>
    </header>

    <!-- MODIFIQUE DE AQUI... -->
    <!-- class="formulario-cliente-login" -->
    <div >
            <!-- class="form-login-cliente" -->
        <form  action="panel-eventos.php" method="post">
            <FONT SIZE="4"><H1><P align="center">Registrar Nuevo Evento</P></H1></FONT>


            <fieldset>
                <legend>Datos del Usuario:</legend>
                <p>Id del usuario: <input type="text" name="idusuario" size="30" placeholder="Ejemplo: U1234">
                <input type="button" value="Buscar "></p>
                <p>Nombre: <input type="text" name="nombre" size="35"></p>
                <p>Apellidos: <input type="text" name="apellidos" size="34"></p>
                <p>Correo: <input type="text" name="correo" size="37"></p>
                <p><input type="button" value="Registrar Usuario"></p>

            </fieldset>
            <br>
            <fieldset>
                <legend>Datos del evento:</legend>
                <p>Fecha del Evento: <input type="datetime-local" name="fecha_evento" size="30"></p>
                <p>Tipo de evento:
                    <input type="radio" name="p1" value="1"> Escolar
                    <input type="radio" name="p1" value="2"> Personal
                    <input type="radio" name="p1" value="2"> Deportes Electronicos
                    <input type="radio" name="p1" value="3"> Otro
                    </p>
                <p>Duracion: <input type="number" name="nombre" size="30" placeholder="Minutos, Ejemplo: 30"></p>
                <p>Precio: <input type="number" name="nombre" size="30"></p>
                <p>Sala: <input type="number" name="numero" size="30"  max="12"></p>
                <input type="button" value="Volver">
                <input type="button" value="Enviar">
            </fieldset>


        </form>
    </div>


    <!-- HASTA ACÁ. -->

    <div class="linea-gris">
        <div>
            <span>Cinépolis México, SA. DE C.V.</span>
            <a href="#">ADMINISTRATIVO</a>
        </div>
    </div>

    <script type="text/javascript" src="view/assets/js/fontawesome.js"></script>
</body>
</html>
