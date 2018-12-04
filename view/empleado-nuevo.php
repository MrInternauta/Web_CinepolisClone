
            <div class="card m-5">
        <div class="card-header">
            Empleado
        </div>
        <div class="card-body">
            <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Sueldo x hora:</label>
                    <input type="text" class="form-control" id="recipient-name"  name="sxh" value="<?php if(!empty($usuario['fechanacimiento']))  echo $usuario['fechanacimiento']; ?>">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Horas a la semana:</label>
                    <input type="text" class="form-control" id="recipient-name" name="hs" value="<?php if(!empty($usuario['sueldo_hora']))  echo $usuario['sueldo_hora']; ?>">
                </div>
               
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Fecha de contratacion:</label>
                    <input type="date" class="form-control" id="recipient-name" name="contratacion" value="<?php if(!empty($usuario['fecha_contratacion']))  echo $usuario['fecha_contratacion']; ?>">
                </div>  
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Puesto:</label>
                <select name="puesto" >
                <option value="<?php if(!empty($usuario['puesto'])) { echo $usuario['puesto']; }else{ echo "Administrador";} ?>"> <?php if(!empty($usuario['puesto'])) { echo $usuario['puesto']; }else{ echo "Administrador";} ?></option>

                <option value="Administrador">Administrador</option>
                <option value="Cajero">Cajero de dulcería</option>
                <option value="Contador">Contador</option>
                <option value="Gerente">Gerente</option>
                <option value="Limpieza">Limpieza</option>
                <option value="Mantenimiento">Mantenimiento</option>
                <option value="Seguridad">Seguridad</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Taquillero">Taquillero</option>
                </select>
                </div>

               
            

        </div>
        </div>
        