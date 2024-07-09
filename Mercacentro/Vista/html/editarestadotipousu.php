<?php $filas3 = $result3->fetch();?>
<div class="form-group">
    <input type="hidden" name="tusu_codigo" value="<?php echo $filas3['tusu_codigo'];?>">
</div>
<div class="form-group">
    <select name="tusu_estado" class="form-control">
            <option><?php echo $filas3['tusu_estado'];?></option>
            <?php 
                $estado=$filas3['tusu_estado'];
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