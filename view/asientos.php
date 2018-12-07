<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cinepolis | Home</title>
        <link rel="icon" type="image/x-icon" href="https://static.cinepolis.com/favicon.ico" />
        <link rel="stylesheet" href="view/assets/css/normalize.min.css">
        <link rel="stylesheet" href="view/assets/css/style-index.css">

    </head>
    <body>
 



     <div class="container-main">
            <header>
                <nav>
                    <div class="logo">
                        <a href="index.php">
                            <img src="view/assets/images/cinepolis-mono.png" width="150px" >
                        </a>
                    </div>

                    <div class="seleccion-cartelera">
                        <form class="ciudad-complejo" action="cartelera.php" method="post">
                           <!-- <select name="ciudad">
                                <option value="false">-Selecciona una ciudad-</option>
                                <option value="Coatzacoalcos">Coatzacoalcos</option>
                                <option value="Minatitlán">Minatitlán</option>
                                <option value="Cosoleacaque">Cosoleacaque</option>
                                <option value="Acayucan">Acayucan</option>
                                <option value="Veracruz">Veracruz</option>
                                <option value="Orizaba">Orizaba</option>
                            </select>-->

                            <select name="complejo">
                            <option value="false">-Selecciona un cine-</option>
                            <?php foreach($statement as $resultado): ?>
                            <?php 
                            
                            echo "<option value='$resultado[2]'>$resultado[2]</option>";
                            ?>
                            <?php endforeach; ?>
                                
                                
                              
                            </select>

                            <input type="submit" id="ver-cartelera" value="VER CARTELERA">
                        </form>
                    </div>
                    
                    <div class='login-usuario'>
                    <?php 
                    if( !empty($_SESSION['usuario']) && !empty($_SESSION['tipo_user']) ){
                        echo "<a href='profile.php'>
                            <img src='view/assets/images/logo-id.png' width='24px'>
                            <span>MiPerfil</span>
                        </a>";

                    }else{
                        echo "<a href='login.php'>
                            <img src='view/assets/images/logo-id.png' width='24px'>
                            <span>Iniciar sesión</span>
                        </a>";

                    }
                    
                    ?>
                        
                    </div>
                </nav>


<hr>
<h1 style='text-center'>Pantalla</h1>
<hr>
<div class="container m-5">
<?php
for($i = 0; $i<10; $i++){
    for($j = 0; $j<10; $j++){
        echo"<input type='checkbox'>";
    
    }
    echo "<br>";

}
?>
</div>


<footer>
           <div class="linea-tipos">
               <img src="view/assets/images/cineplis_vip.png" height="65px">
               <img src="view/assets/images/cinepolis_4DX.png" height="60px">
               <img src="view/assets/images/cinepolis_macroXE.png" height="100px">
               <img src="view/assets/images/cinepolis_club.png" height="65px">
           </div>

           <div class="contacto-container">
               <div class="contacto">
                   <span>CONTACTO</span><br>
                   <span>Av. Universidad #345 Col. Capital, Coatzacoalcos, Ver.</span><br>
                   <span>01 552 122 60 60</span><br>
               </div>

               <div class="logo-grande">
                   <img src="view/assets/images/cineplis_vip.png" height="120px">
               </div>
           </div>
       </footer>

       <div class="linea-gris">
           <div>
               <span>Cinépolis México, SA. DE C.V.</span>
               <a href="login.php">ADMINISTRATIVO</a>
           </div>
       </div>
<script type="text/javascript" src="view/assets/js/main.js"></script>
<script type="text/javascript" src="view/assets/js/fontawesome.js"></script>
        
    </body>
</html>
