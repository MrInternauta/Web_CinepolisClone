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
            <span>Crear Usuario</span>
        </div>
    </header>
    <div class="content m-4" >

<a type="button" class="btn btn-success" href="usuario-nuevo.php">Crear usuario</a>




    </div>
    <nav  class="content m-4" aria-label="...">
  <ul class="pagination">
  <?php  $numero_paginas = numero_paginas(10, $conn); ?>
    <?php if(pagina_actual() == 1):  ?>
        <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
    <?php else:  ?>
        <li class="page-item">
        <a class="page-link" href="panel-usuarios.php?p=<?php echo pagina_actual()-1 ?>" tabindex="-1">Previous</a>
        </li>
    <?php endif;  ?>



    <?php for($i = pagina_actual(); $i <= $numero_paginas; $i++): ?>
        <?php if($i <= 5 + pagina_actual()  ):  ?>
        <?php if(pagina_actual() === $i):  ?>
            <li class="page-item active">
            <a class="page-link" href="panel-usuarios.php?p=<?php echo $i; ?>"><?php echo $i; ?> <span class="sr-only">(current)</span></a>
            </li>
        <?php else:  ?>
                        <li class="page-item"><a class="page-link" href="panel-usuarios.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php endif;  ?>

        <?php endif;  ?>
    <?php endfor;  ?>
    <li class="page-item">
      <a class="page-link" href="panel-usuarios.php?p=<?php echo pagina_actual()+1;?>">Next</a>
    </li>
  </ul>
</nav>

<div class="content m-4">
        


     <table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">Acciones</th>
      <th scope="col">id</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Correo</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Tipo user</th>
      <th scope="col">IMG</th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach($statement as $resultado): ?>
    <tr>
      <th scope="row">
        <a type="button" href="admin-usuarios.php?type=delete&id=<?php echo $resultado['id_usuario']; ?>" class="btn btn-danger">Eliminar</a>
        <a type="button" href="admin-usuarios.php?type=update&id=<?php echo $resultado['id_usuario']; ?>" class="btn btn-warning">Editar</a>
        <a type="button" href="admin-usuarios.php?type=view&id=<?php echo $resultado['id_usuario']; ?>" class="btn btn-info">Ver</a>

      </th>
      <th scope="row"><?php echo $resultado['id_usuario']; ?></th>
      <td><?php echo $resultado['nombres']; ?></td>
      <td><?php echo $resultado['apellidos']; ?></td>
      <td><?php echo $resultado['correo']; ?></td>
      <td><?php echo $resultado['fechanacimiento']; ?></td>
      <td><?php echo $resultado['tipo_user']; ?></td>
      <td><?php echo $resultado['img']; ?></td>
      </tr>
    <?php endforeach; ?>
    

  </tbody>
</table>


</div>


   




    <script type="text/javascript" src="view/assets/js/fontawesome.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
