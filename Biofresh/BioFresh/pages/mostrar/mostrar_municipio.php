<?php 

$id_Departamento=$_POST["id_Departamento"];


 ?>
<label class="form-control-label" for="id_Municipio">Municipio</label>
<select id="id_Municipio"  onchange =" validar_Municipio()">
	
<option value="Selecciona">Selecciona Municipio</option>
<!-- <option value="Selecciona" ></option> -->
<?php 


include '../../assets/conexion/conexion.php';
$query="SELECT * FROM `municipios` WHERE `id_Departamento`=$id_Departamento";
$resource=mysqli_query($conexion,$query);
while ($fila=mysqli_fetch_row($resource)) {
echo"<option value= '$fila[0]' onchange='validar_Municipio()'>$fila[2]</option>";
 }


?>

</select>

<?php 
echo "<script>
  

  var id_Municipio=document.getElementById('id_Municipio').value='$fila[2]'

</script>";
 ?>
