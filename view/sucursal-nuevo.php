<?php 
include('header_sesion.php');
?>
<h2>Complejo</h2> 
<form>
        <div class="form-group">
          <label for="exampleInputEmail1">ID Complejo</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
          placeholder="Ingresa id complejo" name="id_complejo">
        </div>

		<div class="form-group">
	    <label for="exampleInputEmail1">Id direccion</label>
	    <input type="text" class="form-control"  aria-describedby=
	    "emailHelp" placeholder="Ingresa id direccion" name="id_direccion">
	    </div>
	    
	    <div class="form-group">
	    <label for="exampleInputEmail1">Nombre</label>
	    <input type="text" class="form-control"  aria-describedby=
	    "emailHelp" placeholder="Ingresa nombre" name="Nombre">
	    </div>
        
        <div class="form-group">
	    <label for="exampleInputEmail1">Contacto</label>
	    <input type="text" class="form-control"  aria-describedby=
	    "emailHelp" placeholder="Ingresa un contacto" name="Contacto">
	    </div>
        
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>


<?php 
include('footer_sesion.php');
?>
    