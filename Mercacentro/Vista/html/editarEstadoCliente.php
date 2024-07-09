<?php $filas3 = $result3->fetch();?>
<div class="form-group">
    <input type="hidden" name="cli_identificacion" value="<?php echo $filas3['cli_identificacion'];?>">
</div>
<div class="form-group">
    <select name="cli_estado" class="form-control">
            <option><?php echo $filas3['cli_estado'];?></option>
            <?php 
                $estado=$filas3['cli_estado'];
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

