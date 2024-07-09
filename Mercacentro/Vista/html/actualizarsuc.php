<?php $filas2=$result2->fetch();?>
    <div class="form-group">
        <label >Codigo</label>
        <input type="text" class="form-control" readonly name="suc_codigo" value="<?php echo $filas2['suc_codigo']; ?>">
    </div> 
    <div class="form-group">
        <label >Nombre</label>
        <input type="text" class="form-control" name="suc_nombre" value="<?php echo $filas2['suc_nombre']; ?>">
    </div>                                                      
    <div class="form-group">
        <label>Direccion</label>
        <input type="text" class="form-control" name="suc_direccion" value="<?php echo $filas2['suc_direccion']; ?>">
    </div>                                    
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" class="form-control" name="suc_telefono" placeholder="Telefono" value="<?php echo $filas2['suc_telefono']; ?>">                                 
    </div>
    <div class="form-group">
        <label>Celular</label>
        <input type="text" class="form-control" name="suc_celular" value="<?php echo $filas2['suc_celular']; ?>"> 
    </div>
    
    
    