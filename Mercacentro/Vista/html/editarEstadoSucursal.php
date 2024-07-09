<?php $filas3 = $result3->fetch();?>
<div class="form-group">
    <input type="hidden" name="suc_codigo" value="<?php echo $filas3['suc_codigo'];?>">
</div>
<div class="form-group">
    <select name="suc_estado" class="form-control">
            <option><?php echo $filas3['suc_estado'];?></option>
            <?php 
                $estado=$filas3['suc_estado'];
                if ($estado=="Activo") {
                    ?>
                    <option>Inactivo</option>
                    <?php 
                }
                else {
                    ?>
                    <option>Activo</option>
                    <?php 
                }
                ?>
        </select>
</div> 
