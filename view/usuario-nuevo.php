<?php
include('header_sesion.php');
?>

<h2>Usuario</h2>

            

        <form method='POST' action = 'usuario-nuevo.php'>

<div class="card m-5">

        <div class="card-header">
            Perfil
        </div>
        <div class="card-body">
        <?php if( !empty($usuario) ): ?>
        <div class="form-group">
                    <label for="recipient-name" class="col-form-label">ID usuario:</label>
                    <input type="text" class="form-control" id="recipient-name" name="id_usuario" disabled value="<?php if(!empty($usuario[0])) echo $_SESSION['id_usuario'] =  $usuario[0]; ?>">
            </div>
        <?php endif; ?>

            <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="recipient-name"  name="nombre" value="<?php if(!empty($usuario['nombres'])) echo $usuario['nombres']; ?>">
            </div>

            <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Apellido:</label>
                    <input type="text" class="form-control" id="recipient-name" name="apellido"  value="<?php if(!empty($usuario['apellidos']))  echo $usuario['apellidos']; ?>">
             </div>

            <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" id="recipient-name" name="email"  value="<?php if(!empty($usuario['correo']))  echo $usuario['correo']; ?>">
            </div>
            <div class="form-group">
                    <label for="recipient-name" class="col-form-label">ID direccion:</label>
                    <?php if( !empty($usuario) ): ?>
                    <input type="text" class="form-control" id="recipient-name" name="id_direccion"   disabled value="<?php if(!empty($usuario[1])) echo $_SESSION['id_direccion'] =  $usuario[1]; ?>">
                <?php endif; ?>
                            
                <?php if( empty($usuario) ): ?>
                <input type="text" class="form-control" id="recipient-name" name="id_direccion"   >
                <?php endif; ?>
            </div>

            <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Contraseña:</label>
                    <input type="text" class="form-control" id="recipient-name" name="pass"  value="<?php if(!empty($usuario['contrasenia']))  echo $usuario['contrasenia']; ?>">
            </div>

            <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" id="recipient-name" name="nacimiento"  value="<?php if(!empty($usuario['fechanacimiento']))  echo $usuario['fechanacimiento']; ?>" >
            </div>
                
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Tipo de usuario:</label>
                <select name="tipo" >
                    <option value="<?php if(!empty($usuario['tipo_user'])){echo $usuario['tipo_user'];}else{ echo"Empleado";} ?>"> <?php if(!empty($usuario['tipo_user'])){echo $usuario['tipo_user'];}else{ echo"Empleado";} ?></option>
                    <option value="empleado"  > Empleado</option>
                    <option value="cliente" >Cliente</option>
                </select>
            </div>

            <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="foto" value='<?php if(!empty($usuario['img']))  echo $usuario['img']; ?>'>
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
        </div>
            </div>
</div>

 <?php
            //include('view/direccion-nuevo.php');
            //include('view/empleado-nuevo.php');
            ?>
        
            <?php
                if($error){
                    echo "<div class='alert alert-danger m-5' role='alert'>$error</div>";
                }
            ?>
     
            <input  type="submit" class="btn btn-success form-group">

            
    </form>


    

 




<?php
include('footer_sesion.php');
?>
