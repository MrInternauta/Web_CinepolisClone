<?php 
include('header_sesion.php');
?>
<h2>Combo</h2> 
<form>
        <div class="form-group">
          <label for="exampleInputEmail1">id Combo	</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
          placeholder="Ingresa id del combo" name="id_combo">
        </div>

		<div class="form-group">
	    <label for="exampleInputEmail1">Nombre</label>
	    <input type="text" class="form-control"  aria-describedby=
	    "emailHelp" placeholder="Ingresa el nombre" name="nombre">
	    </div>
	    
	    <div class="form-group">
	    <label for="exampleInputEmail1">Descripción</label>
	    <input type="text" class="form-control"  aria-describedby=
	    "emailHelp" placeholder="Ingresa descripcion" name="desc">
	    </div>
        
        <div class="form-group">
	    <label for="exampleInputEmail1">Precio</label>
	    <input type="text" class="form-control"  aria-describedby=
	    "emailHelp" placeholder="Ingresa un precio" name="precio">
	    </div>
        
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>


<?php 
include('footer_sesion.php');
?>
    