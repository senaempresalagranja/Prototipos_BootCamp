<?php $filas3 = $result3->fetch();?>
<div class="form-group">
    <input type="hidden" name="usu_identificacion" value="<?php echo $filas3['usu_identificacion'];?>">
</div>
<div class="form-group">
    <select name="usu_estado" class="form-control">
            <option><?php echo $filas3['usu_estado'];?></option>
            <?php 
                $estado=$filas3['usu_estado'];
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