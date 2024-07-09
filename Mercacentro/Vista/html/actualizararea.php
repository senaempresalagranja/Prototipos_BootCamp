<?php $filas2=$result2->fetch();?>
<div class="form-group">
    <label>Codigo</label>
    <input type="text" class="form-control" readonly name="are_codigo" value="<?php echo $filas2['are_codigo']; ?>"> 
</div>
<div class="form-group">
    <label>Sucursal</label>
    <input type="text" class="form-control" readonly name="are_sucursal" value="<?php echo $filas2['are_sucursal']; ?>"> 
</div>
<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control"  name="are_nombre" value="<?php echo $filas2['are_nombre']; ?>"> 
</div>
<div class="form-group">
    <label>Ubicacion</label>
    <input type="text" class="form-control"  name="are_ubicacion" value="<?php echo $filas2['are_ubicacion']; ?>"> 
</div>