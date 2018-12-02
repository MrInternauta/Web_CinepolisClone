<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinepolis | login</title>
    <link rel="stylesheet" href="view/assets/css/login.css">
</head>
<body>
    <header>
        <div>
            <a href="index.php"><i class="fas fa-angle-left"></i></a>
            <img src="view/assets/images/cinepolis-mono.png" height="50px">
            <span>INICIAR SESIÓN</span>
        </div>
    </header>

    <div class="formulario-cliente-login">
        <form class="form-login-cliente" action="login.php" method="post">
            <div>
                <label for="usuario">Usuario</label><br>
                <input type="text" id="usuario" name='usuario'>
            </div>
            <div>
                <label for="contrasena">Contraseña</label><br>
                <input type="password" id="contrasena" name='pass'>
            </div>

            <input type="submit" id="enviar-login-cliente" value="ACCEDER">
            <br/>
            <br/>
            <p class='error'>
            <?php
                if(!empty($error)){
                    echo $error;
                }

            ?>
            </p>
        </form>
    </div>

    <div class="linea-gris">
        <div>
            <span>Cinépolis México, SA. DE C.V.</span>
        </div>
    </div>

    <script type="text/javascript" src="view/assets/js/fontawesome.js"></script>
</body>
</html>
