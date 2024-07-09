<?php 
    require_once 'conexion.php';
    $conexion=new Conexion(); 
    $sql="SELECT * FROM  sucursal WHERE suc_estado='Activo'";
    $conexion->buscar_query($sql);
    $result=$conexion->obtenerResult();
    $filas=$conexion->ObtenerFilasAfectadas();
    if ($filas>=1) {
    	?>
    	<select name="suc_codigo" id="suc_codigo" class="form-control">
            <option value="">Seleccione la Sucursal</option>
    		<?php 
    		while ($fila=$result->fetch()) {
    			?>

    			<option value="<?php echo $fila['suc_codigo'];?>"><?php echo $fila['suc_nombre'];?></option>
    			<?php 
    		}
    		?>
    	</select>
<?php 
}
?>