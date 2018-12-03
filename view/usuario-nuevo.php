<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinepolis | Usuario</title>
    <link rel="stylesheet" href="view/assets/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <header>
        <div>
            <a href="panel-administrativo.php"><i class="fas fa-angle-left"></i></a>
            <img src="view/assets/images/cinepolis-mono.png" height="50px">
            <span>Usuarios</span>
        </div>
    </header>
<div class="content m-4" >
    <form method='POST' action = 'usuario-nuevo.php'>
            <div class="card m-5">
        <div class="card-header">
            Perfil
        </div>
        <div class="card-body">
            <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="recipient-name"  name="nombre">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Apellido:</label>
                    <input type="text" class="form-control" id="recipient-name" name="apellido">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" id="recipient-name" name="email">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Contraseña:</label>
                    <input type="text" class="form-control" id="recipient-name" name="pass">
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" id="recipient-name" name="nacimiento" >
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tipo de usuario:</label>
                <select name="tipo" >
                <option value="empleado">Empleado</option>
                <option value="empleado">Cliente</option>
                </select>
                </div>

                <div class="input-group mb-3">

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="foto">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            

        </div>
        </div>
        
    <?php

    include('view/direccion-nuevo.php');
    include('view/empleado-nuevo.php');
    ?>
  
    <?php
        if($error){
            echo "<div class='alert alert-danger m-5' role='alert'>$error</div>";
        }
    ?>
      <input  type="submit" class="btn btn-success form-group" >

    </form>
</div>


   



<script type="text/javascript" src="view/assets/js/fontawesome.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
