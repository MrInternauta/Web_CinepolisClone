<?php
include('header_sesion.php');
?>

<h2>Dulceria  <b>
<?php
    echo $complejo['Nombre'] . " ". $complejo['ciudad'];
    ?>
</b> </h2>



<button type="button"
        class="btn btn-success" 
        onclick="window.location.href='producto-nuevo.php'">
        Crear producto</button>


    </div>


<div class="content m-4">
        


     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Acciones</th>
      <th scope="col">Id Articulo</th>
      <th scope="col">Id Categoria</th>
      <th scope="col">Nombre</th>
      <th scope="col">Presentación</th>
      <th scope="col">Stock</th>
      <th scope="col">Código</th>
      <th scope="col">Precio</th>
      <th scope="col">img</th>

    </tr>
  </thead>
  <tbody>
    
     <?php foreach($statement as $resultado): ?>
    <tr>
      <th scope="row">
        <button type="button" 
        onclick="window.location.href='producto-nuevo.php?type=delete&id=<?php echo $resultado['id_articulo']; ?>'"  

        class="btn btn-danger">
        Eliminar</b>

        <button type="button" 
        onclick="window.location.href='producto-nuevo.php?type=view&id=<?php echo $resultado['id_articulo']; ?>'"  
        
        class="btn btn-warning">Ver/Editar</b>

      </th>
      <th scope="row"><?php echo $resultado['id_articulo']; ?></th>
      <td><?php echo $resultado['id_categoria']; ?></td>
      <td><?php echo $resultado['nombre']; ?></td>
      <td><?php echo $resultado['presentacion']; ?></td>
      <td><?php echo $resultado['stock']; ?></td>
      <td><?php echo $resultado['codigo']; ?></td> 
      <td><?php echo $resultado['precio']; ?></td>
      <td><?php echo $resultado['img']; ?></td>
    
      </tr>
    <?php endforeach; ?> 
    

  </tbody>
</table>

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
        onclick="window.location.href='productos-nuevo.php?type=delete&id=<?php echo $resultado['id_complejo'];
         ?>'"  class="btn btn-danger">
        Eliminar</b>
      </div>
    </div>
  </div>
</div>


<?php
include('footer_sesion.php');
?>


