

<?php

include '../../assets/conexion/conexion.php';

$nombre=$_POST["nombre"];

$id_Departamento=$_POST["id_Departamento"];

$id_Municipio=$_POST["id_Municipio"];

$correo=$_POST["correo"];

$celular=$_POST["celular"];
$comentario=$_POST["comentario"];






        // $conexion=mysqli_connect($local,$usuario,$contra,$bd);
      $query="


      INSERT INTO `sugerencias`( `nombre`, `id_Departamento`, `id_Municipio`, `correo`, `celular`, `comentario`)


       VALUES ('$nombre','$id_Departamento','$id_Municipio','$correo','$celular','$comentario' ) 


      ";  

      $resource=mysqli_query($conexion,$query); 
if ($resource==true) {
echo "<p class='comentario_Exitoso'><i class='fa fa-check'> </i> Tu Comentario Fue Enviado Satifactariamente</p> 
";
echo "<script>
   var nombre = document.getElementById('nombre').value='';
        var id_Departamento = document.getElementById('id_Departamento').value='';
        var id_Municipio = document.getElementById('id_Municipio').value='';
        var correo = document.getElementById('correo').value='';
        var celular = document.getElementById('celular').value='';
        var comentario = document.getElementById('comentario').value='';
</script>";
  
}else{
  echo "<script>

     alert(' error');

    </script>";
}






 ?>