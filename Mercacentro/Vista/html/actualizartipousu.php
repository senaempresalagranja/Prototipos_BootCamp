<?php $filas2 = $result2->fetch(); ?>
<div class="form-group">
    <label>Codigo</label>
    <input type="text" class="form-control" readonly name="tusu_codigo" value="<?php echo $filas2['tusu_codigo']; ?>"> 
</div>
<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="tusu_nombre" value="<?php echo $filas2['tusu_nombre']; ?>"> 
</div>