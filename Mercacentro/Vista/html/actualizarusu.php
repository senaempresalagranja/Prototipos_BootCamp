<?php $filas2=$result2->fetch();?>
<div class="form-group">
    <label>Identificacion</label>
    <input type="text" class="form-control" readonly name="usu_identificacion" value="<?php echo $filas2['usu_identificacion']; ?>"> 
</div>
<div class="form-group">
    <label>Tipo</label>
    <input type="text" class="form-control" readonly name="usu_tipo" value="<?php echo $filas2['usu_tipo']; ?>"> 
</div>
<div class="form-group">
    <label>Area</label>
    <input type="text" class="form-control" readonly name="usu_area" value="<?php echo $filas2['usu_area']; ?>"> 
</div>
<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control"  name="usu_nombre" value="<?php echo $filas2['usu_nombre']; ?>"> 
</div>
<div class="form-group">
    <label>Apellido</label>
    <input type="text" class="form-control"  name="usu_apellido" value="<?php echo $filas2['usu_apellido']; ?>"> 
</div>
<div class="form-group">
    <label>Correo</label>
    <input type="text" class="form-control"  name="usu_correo" value="<?php echo $filas2['usu_correo']; ?>"> 
</div>
<div class="form-group">
    <label>Celular</label>
    <input type="text" class="form-control"  name="usu_celular" value="<?php echo $filas2['usu_celular']; ?>"> 
</div>
<div class="form-group">
    <label>Telefono</label>
    <input type="text" class="form-control"  name="usu_telefono" value="<?php echo $filas2['usu_telefono']; ?>"> 
</div>
<div class="form-group">
    <label>Clave</label>
    <input type="text" class="form-control"  name="usu_clave" value="<?php echo $filas2['usu_clave']; ?>"> 
</div>