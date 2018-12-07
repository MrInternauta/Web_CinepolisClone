<?php 
include('header_sesion.php');
?>
    <h2>Producto</h2>
    <form >
    <?php if( !empty($usuario) ): ?>
    <div class="form-group">
          <label for="exampleInputEmail1">ID Articulo</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled placeholder="Ingresa el id del articulo" name="id_articulo" value="<?php if(!empty($usuario[0])) echo $_SESSION['id_producto'] =  $usuario[0]; ?>">
        </div>

        <?php endif; ?>


        
        <div class="form-group">
          <label for="exampleInputEmail1">ID Categoria</label>
          <?php if( !empty($usuario) ): ?>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled placeholder="Ingresa el id de la categoria" name="id_categoria"  value="<?php if(!empty($usuario[0])) echo $_SESSION['id_categoria'] =  $usuario[1]; ?>">
                <?php endif; ?>
                            
                <?php if( empty($usuario) ): ?>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa el id de la categoria" name="id_categoria"  >
                <?php endif; ?>


        </div>

             <div class="form-group">Nombre	</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa el título" name="titulo"  value="<?php if(!empty($usuario['nombre']))  echo $usuario['nombre']; ?>">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Presentación</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa la presentacion" name="Presentacion"  value="<?php if(!empty($usuario['presentacion']))  echo $usuario['presentacion']; ?>" >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Stock</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa stock" name="stock"   value="<?php if(!empty($usuario['stock']))  echo $usuario['stock']; ?>">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Código</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa el codigo" name="codigo"   value="<?php if(!empty($usuario['codigo']))  echo $usuario['codigo']; ?>">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Precio</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa el precio" name="precio"   value="<?php if(!empty($usuario['precio']))  echo $usuario['precio']; ?>">
              </div>

            
              <div class="form-group">
                <label for="exampleInputEmail1">IMG</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="img"   value="<?php if(!empty($usuario['img']))  echo $usuario['img']; ?>">
              </div>





        
        
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      

      

<?php 
include('footer_sesion.php');
?>
    