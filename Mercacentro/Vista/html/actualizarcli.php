<?php $filas2=$result2->fetch();?>
<div class="form-group">
    <label>Identificacion</label>
    <input type="text" class="form-control" readonly name="cli_identificacion" value="<?php echo $filas2['cli_identificacion']; ?>"> 
</div>
<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="cli_nombre" value="<?php echo $filas2['cli_nombre']; ?>"> 
</div>
<div class="form-group">
    <label>Apellido</label>
    <input type="text" class="form-control"  name="cli_apellido" value="<?php echo $filas2['cli_apellido']; ?>"> 
</div>
<div class="form-group">
    <label>Correo</label>
    <input type="text" class="form-control"  name="cli_correo" value="<?php echo $filas2['cli_correo']; ?>"> 
</div>
<div class="form-group">
    <label>Celular</label>
    <input type="text" class="form-control"  name="cli_celular" value="<?php echo $filas2['cli_celular']; ?>"> 
</div>
<div class="form-group">
    <label>Telefono</label>
    <input type="text" class="form-control"  name="cli_telefono" value="<?php echo $filas2['cli_telefono']; ?>"> 
</div>
