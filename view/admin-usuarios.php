
<?php
include('header_sesion.php');
?>



<button type="button" class="btn btn-success" onclick="window.location.href='usuario-nuevo.php'" >Crear usuario</button>




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
        <button type="button" onclick="window.location.href='usuario-nuevo.php?type=delete&id=<?php echo $resultado['id_usuario']; ?>'"  class="btn btn-danger">Eliminar</b>
        <button type="button" onclick="window.location.href='usuario-nuevo.php?type=view&id=<?php echo $resultado['id_usuario']; ?>'"  class="btn btn-warning">Ver/Editar</b>

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

<?php
include('footer_sesion.php');
?>
