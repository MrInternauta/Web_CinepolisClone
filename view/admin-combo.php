<?php
include('header_sesion.php');
?>


<button type="button"
        class="btn btn-success" 
        onclick="window.location.href='combo-nuevo.php'">
        Crear combo</button>


    </div>
    <nav  class="content m-4" aria-label="...">
  <ul class="pagination">
  <?php  $numero_paginas = numero_paginas(10, $conn); ?>
    <?php if(pagina_actual() == 1):  ?>
        <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">Atras</a>
        </li>
    <?php else:  ?>
        <li class="page-item">
        <a class="page-link" 
        href="panel-combo.php?p=<?php echo pagina_actual()-1 ?>" 
        tabindex="-1">Atras</a>
        </li>
    <?php endif;  ?>



    <?php for($i = pagina_actual(); $i <= $numero_paginas; $i++): ?>
        <?php if($i <= 5 + pagina_actual()  ):  ?>
             <?php if(pagina_actual() === $i):  ?>

                   <?php if(pagina_actual() == $numero_paginas): ?>
                    <li class="page-item disabled">
                    <a class="page-link"
                    href="panel-combo.php?p=<?php echo $i; ?>"> Siguiente</a>
                    </li>
                     <?php else: ?>
                    <li class="page-item active">
                    <a class="page-link" href="panel-combo.php?p=<?php echo $i; ?>">
                    <?php echo $i; ?> <span class="sr-only">(current)</span></a>
                    </li> 
                <?php endif; ?>
                <?php else:  ?>
                    <li class="page-item"><a class="page-link" 
                        href="panel-combo.php?p=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
        <?php endif;  ?>
        <?php endif;  ?>
       
    <?php endfor;  ?>
  </ul>
</nav>

<div class="content m-4">
        


     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Acciones</th>
      <th scope="col">Id Combo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Precio</th>

    </tr>
  </thead>
  <tbody>
    
     <?php foreach($statement as $resultado): ?>
    <tr>
      <th scope="row">
        <button type="button" data-toggle="modal" data-target="#eliminar"
        class="btn btn-danger">
        Eliminar</b>

        <button type="button" 
        onclick="window.location.href='sucursal-nuevo.php?type=view&id=<?php echo $resultado['id_usuario']; ?>'"  class="btn btn-warning">Ver/Editar</b>

      </th>
      <th scope="row"><?php echo $resultado['id_combo']; ?></th>
      <td><?php echo $resultado['nombre']; ?></td>
      <td><?php echo $resultado['descripcion']; ?></td>
      <td>$<?php echo $resultado['precio']; ?></td>
    
      </tr>
    <?php endforeach; ?> 
    

  </tbody>
</table>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detalle de Pelicula</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <?php include('sinopsis.php');?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>

<!-- Modal -->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">¿Quieres borrar los datos?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estas seguro de borrar este registro y todos sus datos relacionados?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" 
        onclick="window.location.href='sucursal-nuevo.php?type=delete&id=<?php echo $resultado['id_complejo'];
         ?>'"  class="btn btn-danger">
        Eliminar</b>
      </div>
    </div>
  </div>
</div>

<?php
include('footer_sesion.php');
?>



